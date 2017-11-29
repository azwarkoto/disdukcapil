<?php
class Biodata extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'biodata',
        'main_view' => 'dashboard/biodata_form'
    );

    public function index()
    {
        // Input dari user.
        $biodata = $this->input->post(null, true);

        // Validasi.
        if ($this->biodata->validate('form_rules')) {
            if ($this->biodata->simpan($biodata)) {
                $this->session->set_flashdata('pesan', 'Biodata berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/biodata-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan biodata gagal. Coba ' . anchor('dashboard/biodata', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/biodata-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $id = intval($this->session->userdata('no_peserta'));
            $this->data['values'] = (object) $this->biodata->get($id);
        } else {
            $this->data['values'] = (object) $biodata;
        }
        $this->data['form_action'] = site_url('dashboard/biodata');
        $this->load->view($this->layout, $this->data);
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Biodata Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Biodata Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/biodata_preview';
        $this->data['halaman'] = 'cetak-biodata';

        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('no_peserta');
        $peserta = $this->biodata->get(array('id' => $id, 'status_biodata' => '1'));

        if ($peserta) {
            $this->data['peserta'] = $peserta;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi biodata. Silakan melengkapi ' . anchor('dashboard/biodata', 'biodata.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/biodata-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('no_peserta');
        $peserta = $this->biodata->get(array('id' => $id, 'status_biodata' => '1'));
        if (! $peserta) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi biodata. Silakan melengkapi ' . anchor('dashboard/biodata', 'biodata.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/biodata-cetak-error');
        }
        $data['peserta'] = $peserta;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/biodata_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_peserta = format_no_peserta($peserta->id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('biodata_'.$no_peserta.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/biodata-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

    // Agama
    public function _cek_agama()
    {
        $agama = $this->input->post('agama');
        if (($agama != '') || (! empty($agama))) {
            return true;
        } else {
            $this->form_validation->set_message('_cek_agama', "Agama harus diisi.");
            return false;
        }
    }

    // Kalau agama = "0" (lainnya), keterangan agama harus diisi
    public function _cek_ket_agama()
    {
        $agama = $this->input->post('agama');
        $ket_agama = $this->input->post('ket_agama');
        // Apakah agama diplih (bukan "lainnya")
        if ($agama != '0') {
            // Kalau agama dipilih, maka keterangan agama harus dikosongkan
            if (! empty($ket_agama)) {
                $this->form_validation->set_message('_cek_ket_agama', "Karena agama sudah dipilih, maka kolom keterangan agama harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_agama)) {
                $this->form_validation->set_message('_cek_ket_agama', "Karena agama adalah 'lainnya', maka kolom keterangan agama harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Cek format tanggal ( dd-mm-yyy )
    public function _format_tanggal($str)
    {
        if (!preg_match('/(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-([0-9]{4})/', $str)) {
            $this->form_validation->set_message('_format_tanggal', 'Format tanggal tidak valid. (dd-mm-yyyy)');
            return false;
        } else {
            return true;
        }
    }

    // Pekerjaan Ayah
    public function _ort_pekerjaan_ayah()
    {
        $kerja_ayah = $this->input->post('ort_pekerjaan_ayah');
        if ($kerja_ayah != '') {
            return true;
        } else {
            $this->form_validation->set_message('_ort_pekerjaan_ayah', "Pekerjaan Ayah harus diisi.");
            return false;
        }
    }

    // Kalau pekerjaan ayah = "0" (lainnya), keterangan kerja ayah harus diisi
    public function _ort_ket_pekerjaan_ayah()
    {
        $kerja_ayah = $this->input->post('ort_pekerjaan_ayah');
        $ket_kerja_ayah = $this->input->post('ort_ket_pekerjaan_ayah');
        if ($kerja_ayah != '0') {
            // Kalau pekerjaan ayah dipilih, maka keterangan pekerjaan ayah harus dikosongkan
            if (! empty($ket_kerja_ayah)) {
                $this->form_validation->set_message('_ort_ket_pekerjaan_ayah', "Karena pekerjaan ayah sudah dipilih, maka kolom keterangan pekerjaan ayah harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_kerja_ayah)) {
                $this->form_validation->set_message('_ort_ket_pekerjaan_ayah', "Karena pekerjaan ayah adalah 'lainnya', maka kolom keterangan pekerjaan ayah harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Pekerjaan Ibu
    public function _ort_pekerjaan_ibu()
    {
        $kerja_ibu = $this->input->post('ort_pekerjaan_ibu');
        if ($kerja_ibu != '') {
            return true;
        } else {
            $this->form_validation->set_message('_ort_pekerjaan_ibu', "Pekerjaan ibu harus diisi.");
            return false;
        }
    }

    // Kalau pekerjaan ibu = "lainnya", keterangan kerja ibu harus diisi
    public function _ort_ket_pekerjaan_ibu()
    {
        $kerja_ibu = $this->input->post('ort_pekerjaan_ibu');
        $ket_kerja_ibu = $this->input->post('ort_ket_pekerjaan_ibu');
        if ($kerja_ibu != '0') {
            // Kalau pekerjaan ayah dipilih, maka keterangan pekerjaan ayah harus dikosongkan
            if (! empty($ket_kerja_ibu)) {
                $this->form_validation->set_message('_ort_ket_pekerjaan_ibu', "Karena pekerjaan ibu sudah dipilih, maka kolom keterangan pekerjaan ibu harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_kerja_ibu)) {
                $this->form_validation->set_message('_ort_ket_pekerjaan_ibu', "Karena kerja ibu adalah 'lainnya', maka kolom keterangan kerja ibu harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Tinggal dengan
    public function _tmp_tinggal_dengan()
    {
        $tinggal = $this->input->post('tmp_tinggal_dengan');
        if ($tinggal != '') {
            return true;
        } else {
            $this->form_validation->set_message('_tmp_tinggal_dengan', "Tinggal dengan harus diisi.");
            return false;
        }
    }

    // Kalau tinggal dengan = 'lainnya', field keterangan tinggal harus diisi
    public function _tmp_ket_tinggal_dengan()
    {
        $tinggal_dengan = $this->input->post('tmp_tinggal_dengan');
        $ket_tinggal_dengan = $this->input->post('tmp_ket_tinggal_dengan');
        if ($tinggal_dengan != '0') {
            // Kalau tinggal dengan dipilih, maka keterangan tinggal dengan harus dikosongkan
            if (! empty($ket_tinggal_dengan)) {
                $this->form_validation->set_message('_tmp_ket_tinggal_dengan', "Karena tinggal dengan sudah dipilih, maka kolom keterangan tinggal dengan harus dikosongkan.");
                return false;
            } else {
                return true;
            }
        } else {
            if (empty($ket_tinggal_dengan)) {
                $this->form_validation->set_message('_tmp_ket_tinggal_dengan', "Karena tinggal dengan adalah 'lainnya', maka kolom keterangan tinggal dengan harus diisi.");
                return false;
            } else {
                return true;
            }
        }
    }

    // Kendaraan
    public function _tmp_kendaraan()
    {
        $kendaraan = $this->input->post('tmp_kendaraan');
        if ($kendaraan != '') {
            return true;
        } else {
            $this->form_validation->set_message('_tmp_kendaraan', "Kendaraan harus diisi.");
            return false;
        }
    }
}