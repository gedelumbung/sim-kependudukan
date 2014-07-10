<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sanitasi_penerangan_survey'); ?>
		<?php echo $form->textField($model,'id_sanitasi_penerangan_survey', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepemilikan_jamban'); ?>
		<?php echo $form->textField($model,'kepemilikan_jamban',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_kepemilikan_jamban'); ?>
		<?php echo $form->textField($model,'jumlah_kepemilikan_jamban',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_jamban'); ?>
		<?php echo $form->textField($model,'jenis_jamban',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jamban_alternatif'); ?>
		<?php echo $form->textField($model,'jamban_alternatif',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_penerangan'); ?>
		<?php echo $form->textField($model,'sumber_penerangan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_air_bersih'); ?>
		<?php echo $form->textField($model,'sumber_air_bersih',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kualitas_air_bersih'); ?>
		<?php echo $form->textField($model,'kualitas_air_bersih',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->