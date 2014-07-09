<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_perumahan'); ?>
		<?php echo $form->textField($model,'id_perumahan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_penguasaan_bangunan'); ?>
		<?php echo $form->textField($model,'status_penguasaan_bangunan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_lantai'); ?>
		<?php echo $form->textField($model,'luas_lantai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_air_minum'); ?>
		<?php echo $form->textField($model,'sumber_air_minum',array('size'=>60,'maxlength'=>75, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak_sumber_air_sepiteng'); ?>
		<?php echo $form->textField($model,'jarak_sumber_air_sepiteng',array('size'=>60,'maxlength'=>75, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penggunaan_tempat_buang_air'); ?>
		<?php echo $form->textField($model,'penggunaan_tempat_buang_air',array('size'=>60,'maxlength'=>75, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->