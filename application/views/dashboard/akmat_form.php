<div class="container">
<h2>Formulir Akta Kematian</h2>
<hr>
 

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form','method'=>'post')) ?>
  
   <!-- hidden field -->

<?php echo form_hidden('kabupaten', $values->kabupaten);?>
<?php echo form_hidden('kecamatan', $values->kecamatan);?>

 <!-- kelurahan -->

<div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan')?>">        
        <?php echo form_label('Pemerintah Desa', 'kelurahan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $kelurahan = array(
                '' => '- Pilih -',
                '1' => 'Tambusai Tengah',
                '2' => 'Tambusai Barat',
                '3' => 'Tambusai Timur',
                '4' => 'Batas',
                '5' => 'Tali Kumain',
                '6' => 'Rantau Panjang',
                '7' => 'Sungai Kumango',
                '8' => 'Batang Kumu',
                '9' => 'Sialang Rindang',
                '10' => 'Suka Maju',
                '11' => 'Tingkok',
                '12' => 'Lubuk',

                
            );
            $atribut_kelurahan= 'class="form-control"';
            echo form_dropdown('kelurahan', $kelurahan, $values->kelurahan, $atribut_kelurahan);
            ?>
            <?php if (form_error('kelurahan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
        </div>
        </div>

        <!-- Kecamatan -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan')?>">        
        <?php echo form_label('Pemerintah Kecamatan', 'kecamatan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
         <p class="form-control-static"><?php echo $values->kecamatan;?></p>
         </div>
         </div>

 <!-- kabupaten-->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten')?>">        
        <?php echo form_label('Pemerintah Kabupaten', 'kabupaten', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo $values->kabupaten;?></p>
        </div>
    </div>  

  <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_kep')?>">        
        <?php echo form_label('Nama Kepala Keluarga', 'nama_kep', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_kep', $values->nama_kep, 'id="nama_kep" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>
            <?php set_validation_icon('nama_kep') ?>
        </div>
        <?php if (form_error('nama_kep')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_kep', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

    <!-- no kartu Keluarga --> 
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('no_kk')?>">        
        <?php echo form_label('Nomor Kartu Keluarga', 'no_kk', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('no_kk', $values->no_kk, 'id="no_kk" class="form-control" placeholder="Nomor KK" maxlength="64"') ?>
            <?php set_validation_icon('no_kk') ?>
        </div>
        <?php if (form_error('no_kk')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('no_kk', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>   

    <h3 class="bg-success">Jenazah</h3>

    <!-- nik jenazah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_jenazah')?>">
        <?php echo form_label('Nik Jenazah', 'nik_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('nik_jenazah', $values->nik_jenazah, 'id="nik_jenazah" class="form-control" placeholder="NIK Jenazah" maxlength="32"') ?>
            <?php set_validation_icon('nik_jenazah') ?>
        </div>
        <?php if (form_error('nik_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>



    <!-- nama jenazah -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_jenazah')?>">        
        <?php echo form_label('Nama Jenazah', 'nama_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_jenazah', $values->nama_jenazah, 'id="nama_jenazah" class="form-control" placeholder="Nama" maxlength="64"') ?>
            <?php set_validation_icon('nama_jenazah') ?>
        </div>
        <?php if (form_error('nama_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
    <!-- jenis kelamin  -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('jenkel_jenazah')?>">
        <?php echo form_label('Jenis Kelamin Jenazah', 'jenkel_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="laki-laki">
                <?php echo form_radio('jenkel_jenazah', 'L', (isset($values->jenkel_jenazah) && $values->jenkel_jenazah == 'L') ? true : false, 'id ="laki-laki"')?> Laki-laki
            </label>
            <label class="radio-inline" for="perempuan">
                <?php echo form_radio('jenkel_jenazah', 'P', (isset($values->jenkel_jenazah) && $values->jenkel_jenazah == 'P') ? true : false, 'id ="perempuan"')?> Perempuan
            </label>
        </div>
        <?php if (form_error('jenkel_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('jenkel_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
    <!-- tanggal lahir -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_jenazah')?>">  
        <?php echo form_label('Tanggal Kelahiran Jenazah', 'tanggal_lahir_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_jenazah', date_to_id($values->tanggal_lahir_jenazah), 'id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- umur -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_jenazah')?>">
        <?php echo form_label('Umur Jenazah', 'umur_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('umur_jenazah', $values->tempat_lahir_jenazah, 'id="umur_jenazah" class="form-control" placeholder="umur" maxlength="32"') ?>
            <?php set_validation_icon('umur_jenazah') ?>
        </div>
        <?php if (form_error('umur_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tempat lahir -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tempat_lahir_jenazah')?>">
        <?php echo form_label('Tempat Lahir Jenazah', 'tempat_lahir_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tempat_lahir_jenazah', $values->tempat_lahir_jenazah, 'id="tempat_lahir_jenazah" class="form-control" placeholder="Tempat Lahir" maxlength="32"') ?>
            <?php set_validation_icon('tempat_lahir_jenazah') ?>
        </div>
        <?php if (form_error('tempat_lahir_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tempat_lahir_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

   <!-- Agama -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('agama_jenazah')?>">        
        <?php echo form_label('Agama Jenazah', 'agama_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $agama = array(
                '' => '- Pilih -',
                '1' => 'Islam',
                '2' => 'Kristen',
                '3' => 'Katolik',
                '4' => 'Hindu',
                '5' => 'Budha',
                '6' => 'Lainya',
                
            );
            $atribut_agama= 'class="form-control"';
            echo form_dropdown('agama_jenazah', $agama, $values->agama_jenazah, $atribut_agama);
            ?>
        </div>
        <?php if (form_error('agama_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('agama_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div> 
    
    <!-- Pekerjaan Jenazah -->

    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_jenazah')?>">
        <?php echo form_label('Pekerjaan Jenazah', 'pekerjaan_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
                '9' => 'Petani',
            );
            $atribut_pekerjaan_jenazah = 'class="form-control"';
            echo form_dropdown('pekerjaan_jenazah', $pekerjaan, $values->pekerjaan_ibu, $atribut_pekerjaan_jenazah);
            ?>
        </div>
        <?php if (form_error('pekerjaan_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_jenazah')?>">
        <?php echo form_label('Alamat Jenazah', 'alamat_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_jenazah', $values->alamat_jenazah, 'class="form-control" id="alamat_jenazah" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

     <!--- kewarganegaraan jenazah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kewarganegaraan_jenazah')?>">
        <?php echo form_label('Kewarganegaraan Jenazah', 'kewarganegaraan_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="WNI">
                <?php echo form_radio('kewarganegaraan_jenazah', '1', (isset($values->kewarganegaraan_jenazah) && $values->kewarganegaraan_jenazah == '1') ? true : false, 'id ="WNI"')?> WNI
            </label>
            <label class="radio-inline" for="WNA">
                <?php echo form_radio('kewarganegaraan_jenazah', '2', (isset($values->kewarganegaraan_jenazah) && $values->kewarganegaraan_jenazah == '2') ? true : false, 'id ="WNA"')?> WNA
            </label>
        </div>
        <?php if (form_error('kewarganegaraan_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kewarganegaraan_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Keturunan Jenazah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('keturunan_jenazah')?>">
        <?php echo form_label('Keturunan Jenazah', 'Keturunan_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $keturunan = array(
                '' => '- Pilih -',
                '1' => 'Eropa',
                '2' => 'Cina/Timur Asing Lainya',
                '3' => 'Indonesia',
                '4' => 'Indonesia Nasrani',
                '5' => 'Lainya',
                
            );
            $atribut_keturunan = 'class="form-control"';
            echo form_dropdown('keturunan_jenazah', $keturunan, $values->keturunan_jenazah, $atribut_keturunan);
            ?>
        </div>
        <?php if (form_error('keturunan_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('keturunan_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- kebangsaan jenazah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kebangsaan_jenazah')?>">        
        <?php echo form_label('Kebangsaan Jenazah', 'kebangsaan_jenazah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kebangsaan_jenazah', $values->kebangsaan_jenazah, 'id="kebangsaan_jenazah" class="form-control" placeholder="kebangsaan" maxlength="64"') ?>
            <?php set_validation_icon('kebangsaan_jenazah') ?>
        </div>
        <?php if (form_error('kebangsaan_jenazah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kebangsaan_jenazah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

     <!-- ANak ke -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('anak_ke')?>">        
        <?php echo form_label('Anak Ke ', 'anak_ke', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php echo form_input('anak_ke', $values->anak_ke, 'id="anak_ke" class="form-control" placeholder="anak ke " maxlength="64"') ?>
            <?php set_validation_icon('anak_ke') ?>
        </div>
        <?php if (form_error('anak_ke')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('anak_ke', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal kematian -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_kematian')?>">  
        <?php echo form_label('Tanggal Kematian Jenazah', 'tanggal_kematian', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_kematian', date_to_id($values->tanggal_kematian), 'id="tanggal_kematian" class="form-control" placeholder="Tanggal Kematian" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_kematian')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_kematian', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
  

    <!-- pukul -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pukul_kematian')?>">        
        <?php echo form_label('Pukul Kematian ', 'pukul_kematian', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php echo form_input('pukul_kematian', $values->pukul_kematian, 'id="pukul_kematian" class="form-control" placeholder="Pukul Kematian" maxlength="10"') ?>
            <?php set_validation_icon('pukul_kematian') ?>
        </div>
        <?php if (form_error('pukul_kematian')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pukul_kematian', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- sebab KEmatian -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('sebab_kematian')?>">        
        <?php echo form_label('Sebab Kematian', 'sebab_kematian', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $sebab_kematian = array(
                '' => '- Pilih -',
                '1' => 'Sakit Biasa / Tua',
                '2' => 'Wabah Penyakit',
                '3' => 'Kecelakaan',
                '4' => 'Kriminalitas',
                '5' => 'Bunuh Diri',
                '6' => 'Lainya',
                
            );
            $atribut_sebab_kematian= 'class="form-control"';
            echo form_dropdown('sebab_kematian', $sebab_kematian, $values->sebab_kematian, $atribut_sebab_kematian);
            ?>
        </div>
        <?php if (form_error('sebab_kematian')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('sebab_kematian', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

<!-- tempat Kematian -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tempat_kematian')?>">
        <?php echo form_label('Tempat Kematian', 'tempat_kematian', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('tempat_kematian', $values->tempat_kematian, 'id="tempat_kematian" class="form-control" placeholder="Tempat Kematian" maxlength="32"') ?>
            <?php set_validation_icon('tempat_kematian') ?>
        </div>
        <?php if (form_error('tempat_kematian')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tempat_kematian', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


   
    <!-- Yang Menerangkan-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('yang_menerangkan')?>">        
        <?php echo form_label('Yang Menerangkan', 'yang_menerangkan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $yang_menerangkan = array(
                '' => '- Pilih -',
                '1' => 'Dokter',
                '2' => 'Tenaga Kesehatan',
                '3' => 'kepolisian',
                '4' => 'Lainya',          
            );
            $atribut_yang_menerangkan= 'class="form-control"';
            echo form_dropdown('yang_menerangkan', $yang_menerangkan, $values->yang_menerangkan, $atribut_yang_menerangkan);
            ?>
        </div>
        <?php if (form_error('yang_menerangkan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('yang_menerangkan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success"> AYAH </h3>

    <!-- NIK AYAH -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_ayah')?>">        
        <?php echo form_label('Nik Ayah', 'nik_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nik_ayah', $values->nik_ayah, 'id="nik_ayah" class="form-control" placeholder="NIK Ayah" maxlength="64"') ?>
            <?php set_validation_icon('nik_ayah') ?>
        </div>
        <?php if (form_error('nik_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama ayah -->

     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_ayah')?>">        
        <?php echo form_label('Nama Ayah', 'nama_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_ayah', $values->nama_ayah, 'id="nama_ayah" class="form-control" placeholder="Nama Ibu" maxlength="64"') ?>
            <?php set_validation_icon('nama_ayah') ?>
        </div>
        <?php if (form_error('nama_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir ayah -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_ayah')?>">  
        <?php echo form_label('Tanggal Lahir Ayah', 'tanggal_lahir_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_ayah', date_to_id($values->tanggal_lahir_ayah), 'id="tanggal_lahir_ayah" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- umur ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_ayah')?>">        
        <?php echo form_label('Umur Ayah', 'umur_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('umur_ayah', $values->umur_ayah, 'id="umur_ayah" class="form-control" placeholder="Umur" maxlength="3"') ?>
                <span class="input-group-addon">TH</span>
            </div>
        </div>
        <?php if (form_error('umur_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- pekerjaan ayah-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_ayah')?>">
        <?php echo form_label('Pekerjaan Ayah', 'pekerjaan_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
            );
            $atribut_pekerjaan_ayah = 'class="form-control"';
            echo form_dropdown('pekerjaan_ayah', $pekerjaan, $values->pekerjaan_ayah, $atribut_pekerjaan_ayah);
            ?>
        </div>
        <?php if (form_error('pekerjaan_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat ayah-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_ayah')?>">
        <?php echo form_label('Alamat Ayah', 'alamat_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_ayah', $values->alamat_ayah, 'class="form-control" id="alamat_ayah" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- desa ayah -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan_ayah')?>">        
        <?php echo form_label('Desa', 'kelurahan_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kelurahan_ayah', $values->kelurahan_ayah, 'id="kelurahan_ayah" class="form-control" placeholder="Desa" maxlength="64"') ?>
            <?php set_validation_icon('kelurahan_ayah') ?>
        </div>
        <?php if (form_error('kelurahan_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- kecamatan ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan_ayah')?>">        
        <?php echo form_label('Kecamatan', 'kecamatan_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kecamatan_ayah', $values->kecamatan_ayah, 'id="kecamatan_ayah" class="form-control" placeholder="Kecamatan" maxlength="64"') ?>
            <?php set_validation_icon('kecamatan_ayah') ?>
        </div>
        <?php if (form_error('kecamatan_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kecamatan_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 
 <!-- kabupaten ayah -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten_ayah')?>">        
        <?php echo form_label('Kabupaten', 'kabupaten_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kabupaten_ayah', $values->kabupaten_ayah, 'id="kabupaten_ayah" class="form-control" placeholder="Kabupaten" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_ayah') ?>
        </div>
        <?php if (form_error('kabupaten_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kabupaten_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Provinsi ayah -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('provinsi_ayah')?>">        
        <?php echo form_label('Provinsi', 'provinsi_ayah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('provinsi_ayah', $values->provinsi_ayah, 'id="kabupaten_ayah" class="form-control" placeholder="provinsi" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_ayah') ?>
        </div>
        <?php if (form_error('provinsi_ayah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('provinsi_ayah', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

     <h3 class="bg-success"> IBU </h3>

    <!-- NIK -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_ibu')?>">        
        <?php echo form_label('Nik Ibu', 'nik_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nik_ibu', $values->nik_ibu, 'id="nik_ibu" class="form-control" placeholder="NIK IBU" maxlength="64"') ?>
            <?php set_validation_icon('nik_ibu') ?>
        </div>
        <?php if (form_error('nik_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama ibu -->

     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_ibu')?>">        
        <?php echo form_label('Nama Ibu', 'nama_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_ibu', $values->nama_ibu, 'id="nama_ibu" class="form-control" placeholder="Nama Ibu" maxlength="64"') ?>
            <?php set_validation_icon('nama_ibu') ?>
        </div>
        <?php if (form_error('nama_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir ibu  -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_ibu')?>">  
        <?php echo form_label('Tanggal Lahir Ibu', 'tanggal_lahir_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_ibu', date_to_id($values->tanggal_lahir_ibu), 'id="tanggal_lahir_ibu" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- umur  ibu-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_ibu')?>">        
        <?php echo form_label('Umur Ibu', 'umur_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('umur_ibu', $values->umur_ibu, 'id="umur_ibu" class="form-control" placeholder="Umur" maxlength="3"') ?>
                <span class="input-group-addon">TH</span>
            </div>
        </div>
        <?php if (form_error('umur_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>



    <!-- pekerjaan ibu-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_ibu')?>">
        <?php echo form_label('Pekerjaan Ibu', 'pekerjaan_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
            );
            $atribut_pekerjaan_ibu = 'class="form-control"';
            echo form_dropdown('pekerjaan_ibu', $pekerjaan, $values->pekerjaan_ibu, $atribut_pekerjaan_ibu);
            ?>
        </div>
        <?php if (form_error('pekerjaan_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat ibu-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_ibu')?>">
        <?php echo form_label('Alamat Ibu', 'alamat_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_ibu', $values->alamat_ibu, 'class="form-control" id="alamat_ibu" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- desa ibu -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan_ibu')?>">        
        <?php echo form_label('Desa', 'kelurahan_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kelurahan_ibu', $values->kelurahan_ibu, 'id="kelurahan_ibu" class="form-control" placeholder="Desa" maxlength="64"') ?>
            <?php set_validation_icon('kelurahan_ibu') ?>
        </div>
        <?php if (form_error('kelurahan_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- kecamatan ibu -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan_ibu')?>">        
        <?php echo form_label('Kecamatan', 'kecamatan_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kecamatan_ibu', $values->kecamatan_ibu, 'id="kecamatan_ibu" class="form-control" placeholder="Kecamatan" maxlength="64"') ?>
            <?php set_validation_icon('kecamatan_ibu') ?>
        </div>
        <?php if (form_error('kecamatan_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kecamatan_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 
 <!-- kabupaten Ibu -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten_ibu')?>">        
        <?php echo form_label('Kabupaten', 'kabupaten_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kabupaten_ibu', $values->kabupaten_ibu, 'id="kabupaten_ibu" class="form-control" placeholder="Kabupaten" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_ibu') ?>
        </div>
        <?php if (form_error('kabupaten_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kabupaten_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Provinsi Ibu -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('provinsi_ibu')?>">        
        <?php echo form_label('Provinsi', 'provinsi_ibu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('provinsi_ibu', $values->provinsi_ibu, 'id="kabupaten_ibu" class="form-control" placeholder="provinsi" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_ibu') ?>
        </div>
        <?php if (form_error('provinsi_ibu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('provinsi_ibu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    

     
    <h3 class="bg-success"> Pelapor </h3>
     <!-- NIK pelapor-->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_pelapor')?>">        
        <?php echo form_label('Nik Pelapor', 'nik_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nik_pelapor', $values->nik_pelapor, 'id="nik_pelapor" class="form-control" placeholder="NIK pelapor" maxlength="64"') ?>
            <?php set_validation_icon('nik_pelapor') ?>
        </div>
        <?php if (form_error('nik_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama pelapor-->

     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_pelapor')?>">        
        <?php echo form_label('Nama Pelapor', 'nama_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_pelapor', $values->nama_pelapor, 'id="nama_pelapor" class="form-control" placeholder="Nama pelapor" maxlength="64"') ?>
            <?php set_validation_icon('nama_pelapor') ?>
        </div>
        <?php if (form_error('nama_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

<!--tanggal lahir -->
<div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_pelapor')?>">  
        <?php echo form_label('Tanggal Lahir Pelapor', 'tanggal_lahir_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_pelapor', date_to_id($values->tanggal_lahir_pelapor), 'id="tanggal_lahir_pelapor" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- umur pelapor -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_pelapor')?>">        
        <?php echo form_label('Umur Pelapor', 'umur_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('umur_pelapor', $values->umur_pelapor, 'id="umur_pelapor" class="form-control" placeholder="Umur" maxlength="3"') ?>
                <span class="input-group-addon">TH</span>
            </div>
        </div>
        <?php if (form_error('umur_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


    <!-- pekerjaan Pelapor-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_pelapor')?>">
        <?php echo form_label('Pekerjaan Pelapor', 'pekerjaan_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
            );
            $atribut_pekerjaan_pelapor = 'class="form-control"';
            echo form_dropdown('pekerjaan_pelapor', $pekerjaan, $values->pekerjaan_pelapor, $atribut_pekerjaan_pelapor);
            ?>
        </div>
        <?php if (form_error('pekerjaan_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat saksi pelapor-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_pelapor')?>">
        <?php echo form_label('Alamat Pelapor', 'alamat_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_pelapor', $values->alamat_pelapor, 'class="form-control" id="alamat_pelapor" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- desa pelapor -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan_pelapor')?>">        
        <?php echo form_label('Kelurahan Pelapor', 'kelurahan_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kelurahan_pelapor', $values->kelurahan_pelapor, 'id="kelurahan_pelapor" class="form-control" placeholder="Desa" maxlength="64"') ?>
            <?php set_validation_icon('kelurahan_pelapor') ?>
        </div>
        <?php if (form_error('kelurahan_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- kecamatan pelapor -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan_pelapor')?>">        
        <?php echo form_label('Kecamatan Pelapor', 'kecamatan_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kecamatan_pelapor', $values->kecamatan_pelapor, 'id="kecamatan_pelapor" class="form-control" placeholder="Kecamatan" maxlength="64"') ?>
            <?php set_validation_icon('kecamatan_pelapor') ?>
        </div>
        <?php if (form_error('kecamatan_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kecamatan_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 
 <!-- kabupaten pelapor -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten_pelapor')?>">        
        <?php echo form_label('Kabupaten Pelapor', 'kabupaten_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kabupaten_pelapor', $values->kabupaten_pelapor, 'id="kabupaten_pelapor" class="form-control" placeholder="Kabupaten" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_saksi_satu') ?>
        </div>
        <?php if (form_error('kabupaten_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kabupaten_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Provinsi saksi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('provinsi_pelapor')?>">        
        <?php echo form_label('Provinsi Pelapor', 'provinsi_pelapor', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('provinsi_pelapor', $values->provinsi_pelapor, 'id="provinsi_pelapor" class="form-control" placeholder="provinsi" maxlength="64"') ?>
            <?php set_validation_icon('provinsi_pelapor') ?>
        </div>
        <?php if (form_error('provinsi_pelapor')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('provinsi_pelapor', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

 <h3 class="bg-success"> Saksi 1</h3>
     <!-- NIK saksi-->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_saksi_satu')?>">        
        <?php echo form_label('Nik Saksi 1', 'nik_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nik_saksi_satu', $values->nik_saksi_satu, 'id="nik_saksi_satu" class="form-control" placeholder="NIK saksi 1" maxlength="64"') ?>
            <?php set_validation_icon('nik_saksi_satu') ?>
        </div>
        <?php if (form_error('nik_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama saksi-->

     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_saksi_satu')?>">        
        <?php echo form_label('Nama Saksi 1', 'nama_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_saksi_satu', $values->nama_saksi_satu, 'id="nama_saksi_satu" class="form-control" placeholder="Nama saksi" maxlength="64"') ?>
            <?php set_validation_icon('nama_saksi_satu') ?>
        </div>
        <?php if (form_error('nama_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal_lahir -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_saksi_satu')?>">  
        <?php echo form_label('Tanggal Lahir Saksi 1', 'tanggal_lahir_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_saksi_satu', date_to_id($values->tanggal_lahir_saksi_satu), 'id="tanggal_lahir_saksi_satu" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


    <!-- umur -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_saksi_satu')?>">        
        <?php echo form_label('Umur Saksi 1', 'umur_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('umur_saksi_satu', $values->umur_saksi_satu, 'id="umur_saksi_satu" class="form-control" placeholder="Umur" maxlength="3"') ?>
                <span class="input-group-addon">TH</span>
            </div>
        </div>
        <?php if (form_error('umur_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    

    <!-- pekerjaan saksi-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_saksi_satu')?>">
        <?php echo form_label('Pekerjaan Saksi 1', 'pekerjaan_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
            );
            $atribut_pekerjaan_saksi_satu = 'class="form-control"';
            echo form_dropdown('pekerjaan_saksi_satu', $pekerjaan, $values->pekerjaan_saksi_satu, $atribut_pekerjaan_saksi_satu);
            ?>
        </div>
        <?php if (form_error('pekerjaan_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat saksi 1-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_saksi_satu')?>">
        <?php echo form_label('Alamat Saksi 1', 'alamat_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_saksi_satu', $values->alamat_saksi_satu, 'class="form-control" id="alamat_saksi_satu" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- desa saksi 1 -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan_saksi_satu')?>">        
        <?php echo form_label('Kelurahan Saksi 1', 'kelurahan_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kelurahan_saksi_satu', $values->kelurahan_saksi_satu, 'id="kelurahan_saksi_satu" class="form-control" placeholder="Desa / Kelurahan" maxlength="64"') ?>
            <?php set_validation_icon('kelurahan_saksi_satu') ?>
        </div>
        <?php if (form_error('kelurahan_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- kecamatan saksi 1 -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan_saksi_satu')?>">        
        <?php echo form_label('Kecamatan Saksi 1', 'kecamatan_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kecamatan_saksi_satu', $values->kecamatan_saksi_satu, 'id="kecamatan_saksi_satu" class="form-control" placeholder="Kecamatan" maxlength="64"') ?>
            <?php set_validation_icon('kecamatan_saksi_satu') ?>
        </div>
        <?php if (form_error('kecamatan_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kecamatan_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 
 <!-- kabupaten saksi 1 -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten_saksi_satu')?>">        
        <?php echo form_label('Kabupaten Saksi 1', 'kabupaten_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kabupaten_saksi_satu', $values->kabupaten_saksi_satu, 'id="kabupaten_saksi_satu" class="form-control" placeholder="Kabupaten" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_saksi_satu') ?>
        </div>
        <?php if (form_error('kabupaten_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kabupaten_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Provinsi saksi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('provinsi_saksi_satu')?>">        
        <?php echo form_label('Provinsi Saksi 1', 'provinsi_saksi_satu', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('provinsi_saksi_satu', $values->provinsi_saksi_satu, 'id="provinsi_saksi_satu" class="form-control" placeholder="provinsi" maxlength="64"') ?>
            <?php set_validation_icon('provinsi_saksi_satu') ?>
        </div>
        <?php if (form_error('provinsi_saksi_satu')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('provinsi_saksi_satu', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success"> Saksi 2</h3>
     <!-- NIK saksi 2 -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_saksi_dua')?>">        
        <?php echo form_label('Nik Saksi 2', 'nik_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nik_saksi_dua', $values->nik_saksi_dua, 'id="nik_saksi_dua" class="form-control" placeholder="NIK saksi 2" maxlength="64"') ?>
            <?php set_validation_icon('nik_saksi_dua') ?>
        </div>
        <?php if (form_error('nik_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama saksi-->

     <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_saksi_dua')?>">        
        <?php echo form_label('Nama Saksi 2', 'nama_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_saksi_dua', $values->nama_saksi_dua, 'id="nama_saksi_dua" class="form-control" placeholder="Nama saksi" maxlength="64"') ?>
            <?php set_validation_icon('nama_saksi_dua') ?>
        </div>
        <?php if (form_error('nama_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir saksi 2 -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_saksi_dua')?>">  
        <?php echo form_label('Tanggal Lahir Saksi 2', 'tanggal_lahir_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_saksi_dua', date_to_id($values->tanggal_lahir_saksi_dua), 'id="tanggal_lahir_saksi_dua" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


    <!-- umur -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('umur_saksi_dua')?>">        
        <?php echo form_label('Umur Saksi 2', 'umur_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group">
                <?php echo form_input('umur_saksi_dua', $values->umur_saksi_dua, 'id="umur_saksi_dua" class="form-control" placeholder="Umur" maxlength="3"') ?>
                <span class="input-group-addon">TH</span>
            </div>
        </div>
        <?php if (form_error('umur_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('umur_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    

    <!-- pekerjaan saksi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('pekerjaan_saksi_dua')?>">
        <?php echo form_label('Pekerjaan Saksi 2', 'pekerjaan_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $pekerjaan = array(
                '' => '- Pilih -',
                '1' => 'Belum/Tidak Bekerja',
                '2' => 'Mengurus Rumah Tangga',
                '3' => 'Pelajar/ Mahasiswa',
                '4' => 'Pensiunan',
                '5' => 'Pegawai Negeri Sipil (PNS)',
                '6' => 'TNI',
                '7' => 'Polri',
                '8' => 'wiraswasta',
            );
            $atribut_pekerjaan_saksi_dua = 'class="form-control"';
            echo form_dropdown('pekerjaan_saksi_dua', $pekerjaan, $values->pekerjaan_saksi_dua, $atribut_pekerjaan_saksi_dua);
            ?>
        </div>
        <?php if (form_error('pekerjaan_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('pekerjaan_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- alamat saksi 2-->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_saksi_dua')?>">
        <?php echo form_label('Alamat Saksi 2', 'alamat_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_saksi_dua', $values->alamat_saksi_dua, 'class="form-control" id="alamat_saksi_dua" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- desa saksi 2 -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan_saksi_dua')?>">        
        <?php echo form_label('Kelurahan Saksi 2', 'kelurahan_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kelurahan_saksi_dua', $values->kelurahan_saksi_dua, 'id="kelurahan_saksi_dua" class="form-control" placeholder="Desa" maxlength="64"') ?>
            <?php set_validation_icon('kelurahan_saksi_dua') ?>
        </div>
        <?php if (form_error('kelurahan_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!--- kecamatan saksi 2 -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan_saksi_dua')?>">        
        <?php echo form_label('Kecamatan Saksi 2', 'kecamatan_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kecamatan_saksi_dua', $values->kecamatan_saksi_dua, 'id="kecamatan_saksi_satu" class="form-control" placeholder="Kecamatan" maxlength="64"') ?>
            <?php set_validation_icon('kecamatan_saksi_dua') ?>
        </div>
        <?php if (form_error('kecamatan_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kecamatan_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 
 <!-- kabupaten saksi 2 -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('kabupaten_saksi_dua')?>">        
        <?php echo form_label('Kabupaten saksi 2', 'kabupaten_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('kabupaten_saksi_dua', $values->kabupaten_saksi_dua, 'id="kabupaten_saksi_dua" class="form-control" placeholder="Kabupaten" maxlength="64"') ?>
            <?php set_validation_icon('kabupaten_saksi_dua') ?>
        </div>
        <?php if (form_error('kabupaten_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kabupaten_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Provinsi saksi -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('provinsi_saksi_dua')?>">        
        <?php echo form_label('Provinsi Saksi 2', 'provinsi_saksi_dua', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('provinsi_saksi_dua', $values->provinsi_saksi_dua, 'id="provinsi_saksi_dua" class="form-control" placeholder="provinsi" maxlength="64"') ?>
            <?php set_validation_icon('provinsi_saksi_dua') ?>
        </div>
        <?php if (form_error('provinsi_saksi_dua')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('provinsi_saksi_dua', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

   

    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>