<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_keterangan_keluarga'); ?>
		<?php echo $form->textField($model,'id_keterangan_keluarga', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kepala_rt'); ?>
		<?php echo $form->textField($model,'nama_kepala_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kelamin_rt'); ?>
		<?php echo $form->textField($model,'jenis_kelamin_rt',array('size'=>20,'maxlength'=>20, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_keluarga'); ?>
		<?php echo $form->textField($model,'jumlah_keluarga', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_anggota_keluarga'); ?>
		<?php echo $form->textField($model,'jumlah_anggota_keluarga', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_lantai_bangunan'); ?>
		<?php echo $form->textField($model,'jenis_lantai_bangunan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_dinding_bangunan'); ?>
		<?php echo $form->textField($model,'jenis_dinding_bangunan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fasilitas_buang_air'); ?>
		<?php echo $form->textField($model,'fasilitas_buang_air',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_air'); ?>
		<?php echo $form->textField($model,'sumber_air',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_penerangan'); ?>
		<?php echo $form->textField($model,'sumber_penerangan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_bahan_bakar_memasak'); ?>
		<?php echo $form->textField($model,'jenis_bahan_bakar_memasak',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frekuensi_membeli_daging_seminggu'); ?>
		<?php echo $form->textField($model,'frekuensi_membeli_daging_seminggu',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frekuensi_makan_perhari'); ?>
		<?php echo $form->textField($model,'frekuensi_makan_perhari',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kuantitas_membeli_pakaian_pertahun'); ?>
		<?php echo $form->textField($model,'kuantitas_membeli_pakaian_pertahun',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kemampuan_berobat'); ?>
		<?php echo $form->textField($model,'kemampuan_berobat',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan_kepala_rt'); ?>
		<?php echo $form->textField($model,'pekerjaan_kepala_rt',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendidikan_kepala_rt'); ?>
		<?php echo $form->textField($model,'pendidikan_kepala_rt',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tabungan'); ?>
		<?php echo $form->textField($model,'tabungan',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emas'); ?>
		<?php echo $form->textField($model,'emas',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'televisi'); ?>
		<?php echo $form->textField($model,'televisi',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ternak'); ?>
		<?php echo $form->textField($model,'ternak',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sepeda_motor'); ?>
		<?php echo $form->textField($model,'sepeda_motor',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_balita'); ?>
		<?php echo $form->textField($model,'art_balita',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_7_18'); ?>
		<?php echo $form->textField($model,'art_7_18',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_7_18_sd'); ?>
		<?php echo $form->textField($model,'art_7_18_sd',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_7_18_smp'); ?>
		<?php echo $form->textField($model,'art_7_18_smp',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_7_18_sma'); ?>
		<?php echo $form->textField($model,'art_7_18_sma',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_7_18_tidak_sekolah'); ?>
		<?php echo $form->textField($model,'art_7_18_tidak_sekolah',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_10_49'); ?>
		<?php echo $form->textField($model,'art_10_49',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kredit_usaha'); ?>
		<?php echo $form->textField($model,'kredit_usaha',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->