<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */
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
	'id'=>'keterangan-keluarga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

<div class="row-fluid">
	<div class="span6">

		<?php $model->id_rt = $id; ?>
		<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'id_rt'); ?>
			<?php echo CHtml::dropDownList(
							'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
			<?php echo $form->error($model,'id_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nama_kepala_rt'); ?>
			<?php echo $form->textField($model,'nama_kepala_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nama_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_kelamin_rt'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[jenis_kelamin_rt]',$model->jenis_kelamin_rt,array(''=>'Semua','Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan')); ?>
			<?php echo $form->error($model,'jenis_kelamin_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jumlah_keluarga'); ?>
			<?php echo $form->textField($model,'jumlah_keluarga', array('class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jumlah_keluarga'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jumlah_anggota_keluarga'); ?>
			<?php echo $form->textField($model,'jumlah_anggota_keluarga', array('class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jumlah_anggota_keluarga'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_lantai_bangunan'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[jenis_lantai_bangunan]',$model->jenis_lantai_bangunan,array(''=>'Semua','Tanah/Bambu/Kayu kualitas rendah'=>'Tanah/Bambu/Kayu kualitas rendah','Semen/Keramik/Kayu kualitas tinggi'=>'Semen/Keramik/Kayu kualitas tinggi')); ?>
			<?php echo $form->error($model,'jenis_lantai_bangunan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_dinding_bangunan'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[jenis_dinding_bangunan]',$model->jenis_dinding_bangunan,array(''=>'Semua','Bambu/Rumbia/Kayu kualitas rendah'=>'Bambu/Rumbia/Kayu kualitas rendah','Tembok/Kayu kualitas tinggi'=>'Tembok/Kayu kualitas tinggi')); ?>
			<?php echo $form->error($model,'jenis_dinding_bangunan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'fasilitas_buang_air'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[fasilitas_buang_air]',$model->fasilitas_buang_air,array(''=>'Semua','Bersama/umum/lainnya'=>'Bersama/umum/lainnya','Sendiri'=>'Sendiri')); ?>
			<?php echo $form->error($model,'fasilitas_buang_air'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sumber_air'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[sumber_air]',$model->sumber_air,array(''=>'Semua','Sumur atau mata air tak terlindung/sungai/air hujan'=>'Sumur atau mata air tak terlindung/sungai/air hujan','Air kemasan/ledeng/pompa/sumur atau mata air terlindung'=>'Air kemasan/ledeng/pompa/sumur atau mata air terlindung')); ?>
			<?php echo $form->error($model,'sumber_air'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sumber_penerangan'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[sumber_penerangan]',$model->sumber_penerangan,array(''=>'Semua','Bukan Listrik'=>'Bukan Listrik','Listrik (PLN/NON PLN)'=>'Listrik (PLN/NON PLN)')); ?>
			<?php echo $form->error($model,'sumber_penerangan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_bahan_bakar_memasak'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[jenis_bahan_bakar_memasak]',$model->jenis_bahan_bakar_memasak,array(''=>'Semua','Kayu/Arang'=>'Kayu/Arang','Minyak Tanah'=>'Minyak Tanah','Gas/Listrik'=>'Gas/Listrik')); ?>
			<?php echo $form->error($model,'jenis_bahan_bakar_memasak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'frekuensi_membeli_daging_seminggu'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[frekuensi_membeli_daging_seminggu]',$model->frekuensi_membeli_daging_seminggu,array(''=>'Semua','Tidak Pernah'=>'Tidak Pernah','Satu kali'=>'Satu kali','Dua Kali dan lebih'=>'Dua Kali dan lebih')); ?>
			<?php echo $form->error($model,'frekuensi_membeli_daging_seminggu'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'frekuensi_makan_perhari'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[frekuensi_makan_perhari]',$model->frekuensi_makan_perhari,array(''=>'Semua','Satu Kali'=>'Satu Kali','Dua kali'=>'Dua kali','Tiga Kali dan lebih'=>'Tiga Kali dan lebih')); ?>
			<?php echo $form->error($model,'frekuensi_makan_perhari'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kuantitas_membeli_pakaian_pertahun'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[kuantitas_membeli_pakaian_pertahun]',$model->kuantitas_membeli_pakaian_pertahun,array(''=>'Semua','Tidak Pernah'=>'Tidak Pernah','Satu stel'=>'Satu stel','Dua stel dan lebih'=>'Dua stel dan lebih')); ?>
			<?php echo $form->error($model,'kuantitas_membeli_pakaian_pertahun'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kemampuan_berobat'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[kemampuan_berobat]',$model->kemampuan_berobat,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'kemampuan_berobat'); ?>
		</div>
	</div>

	<div class="span6">

		<div class="row">
			<?php echo $form->labelEx($model,'pekerjaan_kepala_rt'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[pekerjaan_kepala_rt]',$model->pekerjaan_kepala_rt,
							array(
								''=>'Semua',
								'Pertanian dan Palawija'=>'Pertanian dan Palawija',
								'Perkebunan'=>'Perkebunan',
								'Peternakan'=>'Peternakan',
								'Perikanan'=>'Perikanan',
								'Industri'=>'Industri',
								'Perdagangan'=>'Perdagangan',
								'Angkutan'=>'Angkutan',
								'Jasa'=>'Jasa',
								'Lainnya'=>'Lainnya',
								'Tidak bekerja'=>'Tidak bekerja',
							)
						); ?>
			<?php echo $form->error($model,'pekerjaan_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pendidikan_kepala_rt'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[pendidikan_kepala_rt]',$model->pendidikan_kepala_rt,
							array(
								''=>'Semua',
								'SD/MI ke bawah'=>'SD/MI ke bawah',
								'SLTP'=>'SLTP',
								'SLTA ke atas'=>'SLTA ke atas',
							)
						); ?>
			<?php echo $form->error($model,'pendidikan_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tabungan'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[tabungan]',$model->tabungan,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'tabungan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'emas'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[emas]',$model->emas,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'emas'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'televisi'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[televisi]',$model->televisi,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'televisi'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'ternak'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[ternak]',$model->ternak,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'ternak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sepeda_motor'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[sepeda_motor]',$model->sepeda_motor,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'sepeda_motor'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_balita'); ?>
			<?php echo $form->textField($model,'art_balita',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_balita'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[art_7_18]',$model->art_7_18,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'art_7_18'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18_sd'); ?>
			<?php echo $form->textField($model,'art_7_18_sd',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_7_18_sd'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18_smp'); ?>
			<?php echo $form->textField($model,'art_7_18_smp',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_7_18_smp'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18_sma'); ?>
			<?php echo $form->textField($model,'art_7_18_sma',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_7_18_sma'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18_tidak_sekolah'); ?>
			<?php echo $form->textField($model,'art_7_18_tidak_sekolah',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_7_18_tidak_sekolah'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_10_49'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[art_10_49]',$model->art_10_49,
							array(
								''=>'Semua',
								'Ada, 1 orang, sedang ber-KB'=>'Ada, 1 orang, sedang ber-KB',
								'Ada, 1 orang, tidak ber-KB'=>'Ada, 1 orang, tidak ber-KB',
								'Ada, lebih dari 1 orang dan salah satunya sedang ber-KB'=>'Ada, lebih dari 1 orang dan salah satunya sedang ber-KB',
								'Ada, lebih dari 1 orang dan semuanya ber-KB'=>'Ada, lebih dari 1 orang dan semuanya ber-KB',
								'Tidak ada wanita umur 10-49 tahun ber-status kawin'=>'Tidak ada wanita umur 10-49 tahun ber-status kawin',
							)
						); ?>
			<?php echo $form->error($model,'art_10_49'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kredit_usaha'); ?>
			<?php echo CHtml::dropDownList(
							'KeteranganKeluarga[kredit_usaha]',$model->kredit_usaha,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'kredit_usaha'); ?>
		</div>
	</div>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>