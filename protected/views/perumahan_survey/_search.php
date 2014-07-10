<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_perumahan_survey'); ?>
		<?php echo $form->textField($model,'id_perumahan_survey', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_rumah'); ?>
		<?php echo $form->textField($model,'jenis_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konstruksi_rumah'); ?>
		<?php echo $form->textField($model,'konstruksi_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepemilikan_rumah'); ?>
		<?php echo $form->textField($model,'kepemilikan_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fungsi_rumah'); ?>
		<?php echo $form->textField($model,'fungsi_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_pembuatan_rumah'); ?>
		<?php echo $form->textField($model,'tahun_pembuatan_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_lantai'); ?>
		<?php echo $form->textField($model,'jumlah_lantai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_lantai_1'); ?>
		<?php echo $form->textField($model,'luas_lantai_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_lantai_2'); ?>
		<?php echo $form->textField($model,'luas_lantai_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_lantai_3'); ?>
		<?php echo $form->textField($model,'luas_lantai_3',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_pekarangan'); ?>
		<?php echo $form->textField($model,'luas_pekarangan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bagian_terluas_atap'); ?>
		<?php echo $form->textField($model,'bagian_terluas_atap',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi_atap_rumah'); ?>
		<?php echo $form->textField($model,'kondisi_atap_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bagian_terluas_dinding'); ?>
		<?php echo $form->textField($model,'bagian_terluas_dinding',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi_dinding_rumah'); ?>
		<?php echo $form->textField($model,'kondisi_dinding_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bagian_terluas_lantai'); ?>
		<?php echo $form->textField($model,'bagian_terluas_lantai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi_lantai_rumah'); ?>
		<?php echo $form->textField($model,'kondisi_lantai_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_kepemilikan_rumah_lainnya'); ?>
		<?php echo $form->textField($model,'jumlah_kepemilikan_rumah_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_rumah_lainnya'); ?>
		<?php echo $form->textArea($model,'alamat_rumah_lainnya',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepemilikan_imb'); ?>
		<?php echo $form->textField($model,'kepemilikan_imb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penertiban_imb'); ?>
		<?php echo $form->textField($model,'penertiban_imb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepemilikan_surat_tanah'); ?>
		<?php echo $form->textField($model,'kepemilikan_surat_tanah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak_sempadan_jalan'); ?>
		<?php echo $form->textField($model,'jarak_sempadan_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak_sempadan_sungai'); ?>
		<?php echo $form->textField($model,'jarak_sempadan_sungai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak_sempadan_pantai'); ?>
		<?php echo $form->textField($model,'jarak_sempadan_pantai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak_sempadan_irigasi'); ?>
		<?php echo $form->textField($model,'jarak_sempadan_irigasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->