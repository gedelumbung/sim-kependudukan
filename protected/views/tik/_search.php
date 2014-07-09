<?php
/* @var $this TikController */
/* @var $model Tik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tik'); ?>
		<?php echo $form->textField($model,'id_tik', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handphone'); ?>
		<?php echo $form->textField($model,'handphone',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_no_handphone'); ?>
		<?php echo $form->textField($model,'jumlah_no_handphone',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'komputer'); ?>
		<?php echo $form->textField($model,'komputer',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internet'); ?>
		<?php echo $form->textField($model,'internet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_pengguna_internet'); ?>
		<?php echo $form->textField($model,'jumlah_pengguna_internet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internet_warnet'); ?>
		<?php echo $form->textField($model,'internet_warnet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_pengguna_internet_warnet'); ?>
		<?php echo $form->textField($model,'jumlah_pengguna_internet_warnet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internet_kantor_sekolah'); ?>
		<?php echo $form->textField($model,'internet_kantor_sekolah',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_pengguna_internet_kantor_sekolah'); ?>
		<?php echo $form->textField($model,'jumlah_pengguna_internet_kantor_sekolah',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internet_lainnya'); ?>
		<?php echo $form->textField($model,'internet_lainnya',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_pengguna_internet_lainnya'); ?>
		<?php echo $form->textField($model,'jumlah_pengguna_internet_lainnya',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->