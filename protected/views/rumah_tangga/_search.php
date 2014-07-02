<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_desa_kelurahan'); ?>
		<?php echo CHtml::dropDownList(
							'RumahTangga[id_desa_kelurahan]',$model->id_desa_kelurahan,array(''=>'Semua') + CHtml::listData(DesaKelurahan::model()->findAll(),'id_desa_kelurahan','desa_kelurahan')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_krt'); ?>
		<?php echo $form->textField($model,'nama_krt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->