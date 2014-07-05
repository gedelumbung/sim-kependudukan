<?php
/* @var $this Art_peroranganController */
/* @var $model ArtPerorangan */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'art-perorangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_art'); ?>
		<?php echo $form->textField($model,'id_art', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'id_art'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_urut_ibu_kandung'); ?>
		<?php echo $form->textField($model,'no_urut_ibu_kandung',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'no_urut_ibu_kandung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kehadiran_wawancara'); ?>
		<?php echo $form->textField($model,'kehadiran_wawancara',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kehadiran_wawancara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_panas'); ?>
		<?php echo $form->textField($model,'keluhan_panas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_panas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_batuk'); ?>
		<?php echo $form->textField($model,'keluhan_batuk',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_batuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_pilek'); ?>
		<?php echo $form->textField($model,'keluhan_pilek',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_pilek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_asma'); ?>
		<?php echo $form->textField($model,'keluhan_asma',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_asma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_diare'); ?>
		<?php echo $form->textField($model,'keluhan_diare',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_diare'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_sakit_kepala'); ?>
		<?php echo $form->textField($model,'keluhan_sakit_kepala',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_sakit_kepala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_sakit_gigi'); ?>
		<?php echo $form->textField($model,'keluhan_sakit_gigi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_sakit_gigi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_lainnya'); ?>
		<?php echo $form->textField($model,'keluhan_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'keluhan_lainnya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'implikasi_keluhan'); ?>
		<?php echo $form->textField($model,'implikasi_keluhan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'implikasi_keluhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama_implikasi'); ?>
		<?php echo $form->textField($model,'lama_implikasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lama_implikasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'masih_implikasi'); ?>
		<?php echo $form->textField($model,'masih_implikasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'masih_implikasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pengobatan_sendiri'); ?>
		<?php echo $form->textField($model,'pengobatan_sendiri',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pengobatan_sendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_pengobatan_sendiri'); ?>
		<?php echo $form->textField($model,'jenis_pengobatan_sendiri',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jenis_pengobatan_sendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pengobatan_jalan'); ?>
		<?php echo $form->textField($model,'pengobatan_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pengobatan_jalan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_rs_pemerintah'); ?>
		<?php echo $form->textField($model,'berobat_jalan_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_rs_pemerintah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_rs_swasta'); ?>
		<?php echo $form->textField($model,'berobat_jalan_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_rs_swasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_poliklinik'); ?>
		<?php echo $form->textField($model,'berobat_jalan_poliklinik',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_poliklinik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_puskesmas'); ?>
		<?php echo $form->textField($model,'berobat_jalan_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_puskesmas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_nakes'); ?>
		<?php echo $form->textField($model,'berobat_jalan_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_nakes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_batra'); ?>
		<?php echo $form->textField($model,'berobat_jalan_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_batra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_dukun'); ?>
		<?php echo $form->textField($model,'berobat_jalan_dukun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_dukun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berobat_jalan_lainnya'); ?>
		<?php echo $form->textField($model,'berobat_jalan_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berobat_jalan_lainnya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap'); ?>
		<?php echo $form->textField($model,'rawat_inap',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_rs_pemerintah'); ?>
		<?php echo $form->textField($model,'rawat_inap_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_rs_pemerintah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_rs_swasta'); ?>
		<?php echo $form->textField($model,'rawat_inap_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_rs_swasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_puskesmas'); ?>
		<?php echo $form->textField($model,'rawat_inap_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_puskesmas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_nakes'); ?>
		<?php echo $form->textField($model,'rawat_inap_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_nakes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_batra'); ?>
		<?php echo $form->textField($model,'rawat_inap_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_batra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rawat_inap_lainnya'); ?>
		<?php echo $form->textField($model,'rawat_inap_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'rawat_inap_lainnya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jamkesmas'); ?>
		<?php echo $form->textField($model,'jamkesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jamkesmas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jamkesda'); ?>
		<?php echo $form->textField($model,'jamkesda',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jamkesda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jampersal'); ?>
		<?php echo $form->textField($model,'jampersal',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jampersal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bpjs'); ?>
		<?php echo $form->textField($model,'bpjs',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'bpjs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'umur_balita'); ?>
		<?php echo $form->textField($model,'umur_balita',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'umur_balita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penolong_kelahiran_1'); ?>
		<?php echo $form->textField($model,'penolong_kelahiran_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'penolong_kelahiran_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penolong_kelahiran_2'); ?>
		<?php echo $form->textField($model,'penolong_kelahiran_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'penolong_kelahiran_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imunisasi_bcg'); ?>
		<?php echo $form->textField($model,'imunisasi_bcg',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'imunisasi_bcg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imunisasi_dpt'); ?>
		<?php echo $form->textField($model,'imunisasi_dpt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'imunisasi_dpt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imunisasi_polio'); ?>
		<?php echo $form->textField($model,'imunisasi_polio',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'imunisasi_polio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imunisasi_campak'); ?>
		<?php echo $form->textField($model,'imunisasi_campak',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'imunisasi_campak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imunisasi_hepatitis_b'); ?>
		<?php echo $form->textField($model,'imunisasi_hepatitis_b',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'imunisasi_hepatitis_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asi'); ?>
		<?php echo $form->textField($model,'asi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'asi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama_pemberian_asi'); ?>
		<?php echo $form->textField($model,'lama_pemberian_asi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lama_pemberian_asi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diberi_asi_saja'); ?>
		<?php echo $form->textField($model,'diberi_asi_saja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'diberi_asi_saja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asi_24_jam'); ?>
		<?php echo $form->textField($model,'asi_24_jam',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'asi_24_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemeriksaan_kehamilan'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pemeriksaan_kehamilan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_1'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_2'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_3'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_3',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partisipasi_sekolah'); ?>
		<?php echo $form->textField($model,'partisipasi_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'partisipasi_sekolah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berhenti_sekolah'); ?>
		<?php echo $form->textField($model,'berhenti_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'berhenti_sekolah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan_tertinggi'); ?>
		<?php echo $form->textField($model,'pendidikan_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pendidikan_tertinggi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyelenggara_pendidikan'); ?>
		<?php echo $form->textField($model,'penyelenggara_pendidikan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'penyelenggara_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tingkat_tertinggi'); ?>
		<?php echo $form->textField($model,'tingkat_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tingkat_tertinggi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ijazah_tertinggi'); ?>
		<?php echo $form->textField($model,'ijazah_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'ijazah_tertinggi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membaca_menulis'); ?>
		<?php echo $form->textField($model,'membaca_menulis',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'membaca_menulis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bekerja'); ?>
		<?php echo $form->textField($model,'bekerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'bekerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sekolah'); ?>
		<?php echo $form->textField($model,'sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'sekolah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mengurus_rt'); ?>
		<?php echo $form->textField($model,'mengurus_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'mengurus_rt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lainnya'); ?>
		<?php echo $form->textField($model,'lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lainnya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_terbanyak'); ?>
		<?php echo $form->textField($model,'kegiatan_terbanyak',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kegiatan_terbanyak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tidak_bekerja_sementara'); ?>
		<?php echo $form->textField($model,'tidak_bekerja_sementara',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tidak_bekerja_sementara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mencari_pekerjaan'); ?>
		<?php echo $form->textField($model,'mencari_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'mencari_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membuat_usaha'); ?>
		<?php echo $form->textField($model,'membuat_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'membuat_usaha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alasan_tidak_bekerja'); ?>
		<?php echo $form->textField($model,'alasan_tidak_bekerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'alasan_tidak_bekerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jika_ada_tawaran'); ?>
		<?php echo $form->textField($model,'jika_ada_tawaran',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jika_ada_tawaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hari_kerja'); ?>
		<?php echo $form->textField($model,'hari_kerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'hari_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_jam_kerja_seminggu'); ?>
		<?php echo $form->textField($model,'jumlah_jam_kerja_seminggu',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_jam_kerja_seminggu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lapangan_usaha'); ?>
		<?php echo $form->textField($model,'lapangan_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lapangan_usaha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_pekerjaan'); ?>
		<?php echo $form->textField($model,'jenis_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jenis_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_pekerjaan'); ?>
		<?php echo $form->textField($model,'jabatan_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jabatan_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gaji'); ?>
		<?php echo $form->textField($model,'gaji',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'gaji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'umur_saat_nikah'); ?>
		<?php echo $form->textField($model,'umur_saat_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'umur_saat_nikah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_tahun_nikah'); ?>
		<?php echo $form->textField($model,'jumlah_tahun_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_tahun_nikah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_lahir_hidup_laki'); ?>
		<?php echo $form->textField($model,'anak_lahir_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_lahir_hidup_laki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_lahir_hidup_perempuan'); ?>
		<?php echo $form->textField($model,'anak_lahir_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_lahir_hidup_perempuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_lahir_masih_hidup_laki'); ?>
		<?php echo $form->textField($model,'anak_lahir_masih_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_lahir_masih_hidup_laki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_lahir_masih_hidup_perempuan'); ?>
		<?php echo $form->textField($model,'anak_lahir_masih_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_lahir_masih_hidup_perempuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_meninggal_laki'); ?>
		<?php echo $form->textField($model,'anak_meninggal_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_meninggal_laki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_meninggal_perempuan'); ?>
		<?php echo $form->textField($model,'anak_meninggal_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'anak_meninggal_perempuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alat_kb'); ?>
		<?php echo $form->textField($model,'alat_kb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'alat_kb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alat_kb_dipakai'); ?>
		<?php echo $form->textField($model,'alat_kb_dipakai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'alat_kb_dipakai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>