<?php
/* @var $this KetenagakerjaanController */
/* @var $model ArtPerorangan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_art_perorangan'); ?>
		<?php echo $form->textField($model,'id_art_perorangan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_art'); ?>
		<?php echo $form->textField($model,'id_art', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_urut_ibu_kandung'); ?>
		<?php echo $form->textField($model,'no_urut_ibu_kandung',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kehadiran_wawancara'); ?>
		<?php echo $form->textField($model,'kehadiran_wawancara',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_panas'); ?>
		<?php echo $form->textField($model,'keluhan_panas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_batuk'); ?>
		<?php echo $form->textField($model,'keluhan_batuk',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_pilek'); ?>
		<?php echo $form->textField($model,'keluhan_pilek',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_asma'); ?>
		<?php echo $form->textField($model,'keluhan_asma',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_diare'); ?>
		<?php echo $form->textField($model,'keluhan_diare',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_sakit_kepala'); ?>
		<?php echo $form->textField($model,'keluhan_sakit_kepala',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_sakit_gigi'); ?>
		<?php echo $form->textField($model,'keluhan_sakit_gigi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_lainnya'); ?>
		<?php echo $form->textField($model,'keluhan_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'implikasi_keluhan'); ?>
		<?php echo $form->textField($model,'implikasi_keluhan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama_implikasi'); ?>
		<?php echo $form->textField($model,'lama_implikasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'masih_implikasi'); ?>
		<?php echo $form->textField($model,'masih_implikasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pengobatan_sendiri'); ?>
		<?php echo $form->textField($model,'pengobatan_sendiri',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_pengobatan_sendiri'); ?>
		<?php echo $form->textField($model,'jenis_pengobatan_sendiri',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pengobatan_jalan'); ?>
		<?php echo $form->textField($model,'pengobatan_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_rs_pemerintah'); ?>
		<?php echo $form->textField($model,'berobat_jalan_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_rs_swasta'); ?>
		<?php echo $form->textField($model,'berobat_jalan_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_poliklinik'); ?>
		<?php echo $form->textField($model,'berobat_jalan_poliklinik',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_puskesmas'); ?>
		<?php echo $form->textField($model,'berobat_jalan_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_nakes'); ?>
		<?php echo $form->textField($model,'berobat_jalan_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_batra'); ?>
		<?php echo $form->textField($model,'berobat_jalan_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_dukun'); ?>
		<?php echo $form->textField($model,'berobat_jalan_dukun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berobat_jalan_lainnya'); ?>
		<?php echo $form->textField($model,'berobat_jalan_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap'); ?>
		<?php echo $form->textField($model,'rawat_inap',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_rs_pemerintah'); ?>
		<?php echo $form->textField($model,'rawat_inap_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_rs_swasta'); ?>
		<?php echo $form->textField($model,'rawat_inap_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_puskesmas'); ?>
		<?php echo $form->textField($model,'rawat_inap_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_nakes'); ?>
		<?php echo $form->textField($model,'rawat_inap_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_batra'); ?>
		<?php echo $form->textField($model,'rawat_inap_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_inap_lainnya'); ?>
		<?php echo $form->textField($model,'rawat_inap_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jamkesmas'); ?>
		<?php echo $form->textField($model,'jamkesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jamkesda'); ?>
		<?php echo $form->textField($model,'jamkesda',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jampersal'); ?>
		<?php echo $form->textField($model,'jampersal',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjs'); ?>
		<?php echo $form->textField($model,'bpjs',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umur_balita'); ?>
		<?php echo $form->textField($model,'umur_balita',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penolong_kelahiran_1'); ?>
		<?php echo $form->textField($model,'penolong_kelahiran_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penolong_kelahiran_2'); ?>
		<?php echo $form->textField($model,'penolong_kelahiran_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imunisasi_bcg'); ?>
		<?php echo $form->textField($model,'imunisasi_bcg',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imunisasi_dpt'); ?>
		<?php echo $form->textField($model,'imunisasi_dpt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imunisasi_polio'); ?>
		<?php echo $form->textField($model,'imunisasi_polio',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imunisasi_campak'); ?>
		<?php echo $form->textField($model,'imunisasi_campak',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imunisasi_hepatitis_b'); ?>
		<?php echo $form->textField($model,'imunisasi_hepatitis_b',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asi'); ?>
		<?php echo $form->textField($model,'asi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama_pemberian_asi'); ?>
		<?php echo $form->textField($model,'lama_pemberian_asi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diberi_asi_saja'); ?>
		<?php echo $form->textField($model,'diberi_asi_saja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asi_24_jam'); ?>
		<?php echo $form->textField($model,'asi_24_jam',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemeriksaan_kehamilan'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemeriksaan_kehamilan_trisemester_1'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemeriksaan_kehamilan_trisemester_2'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemeriksaan_kehamilan_trisemester_3'); ?>
		<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_3',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partisipasi_sekolah'); ?>
		<?php echo $form->textField($model,'partisipasi_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berhenti_sekolah'); ?>
		<?php echo $form->textField($model,'berhenti_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendidikan_tertinggi'); ?>
		<?php echo $form->textField($model,'pendidikan_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penyelenggara_pendidikan'); ?>
		<?php echo $form->textField($model,'penyelenggara_pendidikan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tingkat_tertinggi'); ?>
		<?php echo $form->textField($model,'tingkat_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ijazah_tertinggi'); ?>
		<?php echo $form->textField($model,'ijazah_tertinggi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membaca_menulis'); ?>
		<?php echo $form->textField($model,'membaca_menulis',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bekerja'); ?>
		<?php echo $form->textField($model,'bekerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sekolah'); ?>
		<?php echo $form->textField($model,'sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mengurus_rt'); ?>
		<?php echo $form->textField($model,'mengurus_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lainnya'); ?>
		<?php echo $form->textField($model,'lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_terbanyak'); ?>
		<?php echo $form->textField($model,'kegiatan_terbanyak',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tidak_bekerja_sementara'); ?>
		<?php echo $form->textField($model,'tidak_bekerja_sementara',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mencari_pekerjaan'); ?>
		<?php echo $form->textField($model,'mencari_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membuat_usaha'); ?>
		<?php echo $form->textField($model,'membuat_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alasan_tidak_bekerja'); ?>
		<?php echo $form->textField($model,'alasan_tidak_bekerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jika_ada_tawaran'); ?>
		<?php echo $form->textField($model,'jika_ada_tawaran',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hari_kerja'); ?>
		<?php echo $form->textField($model,'hari_kerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_jam_kerja_seminggu'); ?>
		<?php echo $form->textField($model,'jumlah_jam_kerja_seminggu',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lapangan_usaha'); ?>
		<?php echo $form->textField($model,'lapangan_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_pekerjaan'); ?>
		<?php echo $form->textField($model,'jenis_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan_pekerjaan'); ?>
		<?php echo $form->textField($model,'jabatan_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gaji'); ?>
		<?php echo $form->textField($model,'gaji',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umur_saat_nikah'); ?>
		<?php echo $form->textField($model,'umur_saat_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_tahun_nikah'); ?>
		<?php echo $form->textField($model,'jumlah_tahun_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_lahir_hidup_laki'); ?>
		<?php echo $form->textField($model,'anak_lahir_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_lahir_hidup_perempuan'); ?>
		<?php echo $form->textField($model,'anak_lahir_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_lahir_masih_hidup_laki'); ?>
		<?php echo $form->textField($model,'anak_lahir_masih_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_lahir_masih_hidup_perempuan'); ?>
		<?php echo $form->textField($model,'anak_lahir_masih_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_meninggal_laki'); ?>
		<?php echo $form->textField($model,'anak_meninggal_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_meninggal_perempuan'); ?>
		<?php echo $form->textField($model,'anak_meninggal_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alat_kb'); ?>
		<?php echo $form->textField($model,'alat_kb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alat_kb_dipakai'); ?>
		<?php echo $form->textField($model,'alat_kb_dipakai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->