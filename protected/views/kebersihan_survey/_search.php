<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kebersihan_survey'); ?>
		<?php echo $form->textField($model,'id_kebersihan_survey', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tps'); ?>
		<?php echo $form->textField($model,'tps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bentuk_tps'); ?>
		<?php echo $form->textField($model,'bentuk_tps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemilihan_sampah'); ?>
		<?php echo $form->textField($model,'pemilihan_sampah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tps_alternatif'); ?>
		<?php echo $form->textField($model,'tps_alternatif',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'layanan_tps_keliling'); ?>
		<?php echo $form->textField($model,'layanan_tps_keliling',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intensitas_pengangkutan_sampah'); ?>
		<?php echo $form->textField($model,'intensitas_pengangkutan_sampah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alasan_tidak_berlangganan'); ?>
		<?php echo $form->textField($model,'alasan_tidak_berlangganan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keanggotaan_urusan_sampah'); ?>
		<?php echo $form->textField($model,'keanggotaan_urusan_sampah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->