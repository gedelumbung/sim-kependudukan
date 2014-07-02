<?php
/* @var $this KematianController */
/* @var $model Kematian */
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
	'id'=>'kematian-form',
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
			<?php echo $form->labelEx($model,'nama'); ?>
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tahun'); ?>
			<?php echo $form->textField($model,'tahun', array('class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'tahun'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
			<?php echo CHtml::dropDownList(
							'Kematian[jenis_kelamin]',$model->jenis_kelamin,array(''=>'Semua','Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan')); ?>
			<?php echo $form->error($model,'jenis_kelamin'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'umur'); ?>
			<?php echo $form->textField($model,'umur',array('size'=>30,'maxlength'=>30, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'umur'); ?>
		</div>
	</div>

	<div class="span6">

		<div class="row">
			<?php echo $form->labelEx($model,'sebab_kematian'); ?>
			<?php echo $form->textArea($model,'sebab_kematian',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'sebab_kematian'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'masa_kehamilan'); ?>
			<?php echo $form->textField($model,'masa_kehamilan',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'masa_kehamilan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'persalinan'); ?>
			<?php echo $form->textField($model,'persalinan',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'persalinan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nifas'); ?>
			<?php echo $form->textField($model,'nifas',array('size'=>5,'maxlength'=>5, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nifas'); ?>
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