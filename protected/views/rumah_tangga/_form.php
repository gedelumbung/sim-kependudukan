<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */
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
	'id'=>'rumah-tangga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_desa_kelurahan'); ?>
			<?php echo CHtml::dropDownList(
							'RumahTangga[id_desa_kelurahan]',$model->id_desa_kelurahan,array(''=>'Semua') + CHtml::listData(DesaKelurahan::model()->findAll(),'id_desa_kelurahan','desa_kelurahan')); ?>
		<?php echo $form->error($model,'id_desa_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_krt'); ?>
		<?php echo $form->textField($model,'nama_krt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nama_krt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suku_krt'); ?>
		<?php echo $form->textField($model,'suku_krt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'suku_krt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_art'); ?>
		<?php echo $form->textField($model,'jumlah_art', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_art'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_anak'); ?>
		<?php echo $form->textField($model,'jumlah_anak', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_anak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_art_meninggal'); ?>
		<?php echo $form->textField($model,'jumlah_art_meninggal', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_art_meninggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>