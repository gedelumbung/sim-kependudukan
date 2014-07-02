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
		<?php echo $form->hiddenField($model,'id_rt', array('class'=>'input-block-level')); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'id_rt'); ?>
			<?php echo CHtml::dropDownList(
							'Kematian[id_rt]',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
			<?php echo $form->error($model,'id_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nama_kepala_rt'); ?>
			<?php echo $form->textField($model,'nama_kepala_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nama_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_kelamin_rt'); ?>
			<?php echo $form->textField($model,'jenis_kelamin_rt',array('size'=>20,'maxlength'=>20, 'class'=>'input-block-level')); ?>
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
			<?php echo $form->textField($model,'jenis_lantai_bangunan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jenis_lantai_bangunan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_dinding_bangunan'); ?>
			<?php echo $form->textField($model,'jenis_dinding_bangunan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jenis_dinding_bangunan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'fasilitas_buang_air'); ?>
			<?php echo $form->textField($model,'fasilitas_buang_air',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'fasilitas_buang_air'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sumber_air'); ?>
			<?php echo $form->textField($model,'sumber_air',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'sumber_air'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sumber_penerangan'); ?>
			<?php echo $form->textField($model,'sumber_penerangan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'sumber_penerangan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_bahan_bakar_memasak'); ?>
			<?php echo $form->textField($model,'jenis_bahan_bakar_memasak',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jenis_bahan_bakar_memasak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'frekuensi_membeli_daging_seminggu'); ?>
			<?php echo $form->textField($model,'frekuensi_membeli_daging_seminggu',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'frekuensi_membeli_daging_seminggu'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'frekuensi_makan_perhari'); ?>
			<?php echo $form->textField($model,'frekuensi_makan_perhari',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'frekuensi_makan_perhari'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kuantitas_membeli_pakaian_pertahun'); ?>
			<?php echo $form->textField($model,'kuantitas_membeli_pakaian_pertahun',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'kuantitas_membeli_pakaian_pertahun'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kemampuan_berobat'); ?>
			<?php echo $form->textField($model,'kemampuan_berobat',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'kemampuan_berobat'); ?>
		</div>
	</div>

	<div class="span6">

		<div class="row">
			<?php echo $form->labelEx($model,'pekerjaan_kepala_rt'); ?>
			<?php echo $form->textField($model,'pekerjaan_kepala_rt',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'pekerjaan_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pendidikan_kepala_rt'); ?>
			<?php echo $form->textField($model,'pendidikan_kepala_rt',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'pendidikan_kepala_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tabungan'); ?>
			<?php echo $form->textField($model,'tabungan',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'tabungan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'emas'); ?>
			<?php echo $form->textField($model,'emas',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'emas'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'televisi'); ?>
			<?php echo $form->textField($model,'televisi',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'televisi'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'ternak'); ?>
			<?php echo $form->textField($model,'ternak',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'ternak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sepeda_motor'); ?>
			<?php echo $form->textField($model,'sepeda_motor',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'sepeda_motor'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_balita'); ?>
			<?php echo $form->textField($model,'art_balita',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_balita'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'art_7_18'); ?>
			<?php echo $form->textField($model,'art_7_18',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
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
			<?php echo $form->textField($model,'art_10_49',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'art_10_49'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kredit_usaha'); ?>
			<?php echo $form->textField($model,'kredit_usaha',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
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