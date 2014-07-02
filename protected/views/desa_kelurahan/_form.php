<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */
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
	'id'=>'desa-kelurahan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_provinsi'); ?>
			<?php echo CHtml::dropDownList(
							'DesaKelurahan[id_provinsi]',$model->id_provinsi,array(''=>'Semua') + CHtml::listData(Provinsi::model()->findAll(),'id_provinsi','provinsi')); ?>
		<?php echo $form->error($model,'id_provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kabupaten'); ?>
			<?php echo CHtml::dropDownList(
							'DesaKelurahan[id_kabupaten]',$model->id_kabupaten,array(''=>'Semua') + CHtml::listData(Kabupaten::model()->findAll(),'id_kabupaten','kabupaten')); ?>
		<?php echo $form->error($model,'id_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kecamatan'); ?>
			<?php echo CHtml::dropDownList(
							'DesaKelurahan[id_kecamatan]',$model->id_kecamatan,array(''=>'Semua') + CHtml::listData(Kecamatan::model()->findAll(),'id_kecamatan','kecamatan')); ?>
		<?php echo $form->error($model,'id_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desa_kelurahan'); ?>
		<?php echo $form->textField($model,'desa_kelurahan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'desa_kelurahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>