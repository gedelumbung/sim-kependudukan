<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pengeluaran_non_makanan'); ?>
		<?php echo $form->textField($model,'id_pengeluaran_non_makanan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sewa_rumah'); ?>
		<?php echo $form->textField($model,'sewa_rumah', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemeliharaan_rumah'); ?>
		<?php echo $form->textField($model,'pemeliharaan_rumah', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rekening_rt'); ?>
		<?php echo $form->textField($model,'rekening_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rekening_elektrik'); ?>
		<?php echo $form->textField($model,'rekening_elektrik', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pakaian'); ?>
		<?php echo $form->textField($model,'pakaian', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang_tahan_lama'); ?>
		<?php echo $form->textField($model,'barang_tahan_lama', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pbb'); ?>
		<?php echo $form->textField($model,'pbb', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retribusi'); ?>
		<?php echo $form->textField($model,'retribusi', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'askes'); ?>
		<?php echo $form->textField($model,'askes', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pajak_lainnya'); ?>
		<?php echo $form->textField($model,'pajak_lainnya', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keperluan_pesta'); ?>
		<?php echo $form->textField($model,'keperluan_pesta', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_penghasilan_utama_rt'); ?>
		<?php echo $form->textField($model,'sumber_penghasilan_utama_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_status_pekerjaan'); ?>
		<?php echo $form->textField($model,'kode_status_pekerjaan', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->