<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pengeluaran_rt'); ?>
		<?php echo $form->textField($model,'id_pengeluaran_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beras'); ?>
		<?php echo $form->textField($model,'beras', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padi_lainnya'); ?>
		<?php echo $form->textField($model,'padi_lainnya', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umbi_umbian'); ?>
		<?php echo $form->textField($model,'umbi_umbian', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ikan_segar'); ?>
		<?php echo $form->textField($model,'ikan_segar', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ikan_diawetkan'); ?>
		<?php echo $form->textField($model,'ikan_diawetkan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daging'); ?>
		<?php echo $form->textField($model,'daging', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telur'); ?>
		<?php echo $form->textField($model,'telur', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'susu'); ?>
		<?php echo $form->textField($model,'susu', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sayur'); ?>
		<?php echo $form->textField($model,'sayur', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kacang'); ?>
		<?php echo $form->textField($model,'kacang', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buah'); ?>
		<?php echo $form->textField($model,'buah', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minyak_lemak'); ?>
		<?php echo $form->textField($model,'minyak_lemak', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bahan_minuman'); ?>
		<?php echo $form->textField($model,'bahan_minuman', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bumbu_bumbuan'); ?>
		<?php echo $form->textField($model,'bumbu_bumbuan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mie'); ?>
		<?php echo $form->textField($model,'mie', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konsumsi_lainnya'); ?>
		<?php echo $form->textField($model,'konsumsi_lainnya', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'makanan_jadi'); ?>
		<?php echo $form->textField($model,'makanan_jadi', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minuman_non_alkohol'); ?>
		<?php echo $form->textField($model,'minuman_non_alkohol', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minuman_alkohol'); ?>
		<?php echo $form->textField($model,'minuman_alkohol', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rokok'); ?>
		<?php echo $form->textField($model,'rokok', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tembakau_lainnya'); ?>
		<?php echo $form->textField($model,'tembakau_lainnya', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->