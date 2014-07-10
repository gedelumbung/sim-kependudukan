<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_informasi_tambahan_survey'); ?>
		<?php echo $form->textField($model,'id_informasi_tambahan_survey', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drainase'); ?>
		<?php echo $form->textField($model,'drainase',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bentuk_drainase'); ?>
		<?php echo $form->textField($model,'bentuk_drainase',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fungsi_drainase'); ?>
		<?php echo $form->textField($model,'fungsi_drainase',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kualitas_drainase'); ?>
		<?php echo $form->textField($model,'kualitas_drainase',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klasifikasi_drainase'); ?>
		<?php echo $form->textField($model,'klasifikasi_drainase',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penanganan_limbah_rt'); ?>
		<?php echo $form->textField($model,'penanganan_limbah_rt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_jalan_rumah'); ?>
		<?php echo $form->textField($model,'status_jalan_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bentuk_fisik_permukaan_jalan'); ?>
		<?php echo $form->textField($model,'bentuk_fisik_permukaan_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kualitas_jalan'); ?>
		<?php echo $form->textField($model,'kualitas_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fungsi_jalan'); ?>
		<?php echo $form->textField($model,'fungsi_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jalan'); ?>
		<?php echo $form->textField($model,'nama_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->