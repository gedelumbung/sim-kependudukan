<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_lahan_pertanian'); ?>
		<?php echo $form->textField($model,'id_lahan_pertanian', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lahan_pertanian'); ?>
		<?php echo $form->textField($model,'lahan_pertanian',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milik_sendiri_pencacahan_luas_sawah'); ?>
		<?php echo $form->textField($model,'milik_sendiri_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milik_sendiri_pencacahan_lahan_kering'); ?>
		<?php echo $form->textField($model,'milik_sendiri_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milik_sendiri_setahun_lalu_luas_sawah'); ?>
		<?php echo $form->textField($model,'milik_sendiri_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milik_sendiri_setahun_lalu_lahan_kering'); ?>
		<?php echo $form->textField($model,'milik_sendiri_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pihak_lain_pencacahan_luas_sawah'); ?>
		<?php echo $form->textField($model,'pihak_lain_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pihak_lain_pencacahan_lahan_kering'); ?>
		<?php echo $form->textField($model,'pihak_lain_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pihak_lain_setahun_lalu_luas_sawah'); ?>
		<?php echo $form->textField($model,'pihak_lain_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pihak_lain_setahun_lalu_lahan_kering'); ?>
		<?php echo $form->textField($model,'pihak_lain_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sendiri_pihak_lain_pencacahan_luas_sawah'); ?>
		<?php echo $form->textField($model,'sendiri_pihak_lain_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sendiri_pihak_lain_pencacahan_lahan_kering'); ?>
		<?php echo $form->textField($model,'sendiri_pihak_lain_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sendiri_pihak_lain_setahun_lalu_luas_sawah'); ?>
		<?php echo $form->textField($model,'sendiri_pihak_lain_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sendiri_pihak_lain_setahun_lalu_lahan_kering'); ?>
		<?php echo $form->textField($model,'sendiri_pihak_lain_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dikuasai_pencacahan_luas_swah'); ?>
		<?php echo $form->textField($model,'dikuasai_pencacahan_luas_swah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dikuasai_pencacahan_lahan_kering'); ?>
		<?php echo $form->textField($model,'dikuasai_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dikuasai_setahun_lalu_luas_swah'); ?>
		<?php echo $form->textField($model,'dikuasai_setahun_lalu_luas_swah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dikuasai_setahun_lalu_lahan_kering'); ?>
		<?php echo $form->textField($model,'dikuasai_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertanian_pencacahan_luas_sawah'); ?>
		<?php echo $form->textField($model,'pertanian_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertanian_pencacahan_lahan_kering'); ?>
		<?php echo $form->textField($model,'pertanian_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertanian_setahun_lalu_luas_sawah'); ?>
		<?php echo $form->textField($model,'pertanian_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pertanian_setahun_lalu_lahan_kering'); ?>
		<?php echo $form->textField($model,'pertanian_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->