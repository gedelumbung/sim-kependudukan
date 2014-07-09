<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */
/* @var $form CActiveForm */
?>

<style type="text/css">
	select{
		width: 100%;
	}
</style>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perumahan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

		<?php $model->id_rt = $id; ?>
		<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'id_rt'); ?>
			<?php echo CHtml::dropDownList(
							'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
			<?php echo $form->error($model,'id_rt'); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_penguasaan_bangunan'); ?>
		<?php echo CHtml::dropDownList(
						'Perumahan[status_penguasaan_bangunan]',$model->status_penguasaan_bangunan,
						array(
							''=>'Semua',
							'Milik Sendiri'=>'Milik Sendiri',
							'Kontrak'=>'Kontrak',
							'Sewa'=>'Sewa',
							'Bebas Sewa'=>'Bebas Sewa',
							'Dinas'=>'Dinas',
							'Milik orang tua/sanak saudara'=>'Milik orang tua/sanak saudara',
							'Lainnya'=>'Lainnya',
						)
					); 
				?>
		<?php echo $form->error($model,'status_penguasaan_bangunan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas_lantai'); ?>
		<?php echo $form->textField($model,'luas_lantai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'luas_lantai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_air_minum'); ?>
		<?php echo CHtml::dropDownList(
						'Perumahan[sumber_air_minum]',$model->sumber_air_minum,
						array(
							''=>'Semua',
							'Air dalam kemasan'=>'Air dalam kemasan',
							'Leding'=>'Leding',
							'Pompa'=>'Pompa',
							'Sumur terlindung'=>'Sumur terlindung',
							'Sumur tak terlindung'=>'Sumur tak terlindung',
							'Mata air terlindung'=>'Mata air terlindung',
							'Mata air tak terlindung'=>'Mata air tak terlindung',
							'Air sungai'=>'Air sungai',
							'Air hujan'=>'Air hujan',
							'Lainnya'=>'Lainnya',
						)
					); 
				?>
		<?php echo $form->error($model,'sumber_air_minum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jarak_sumber_air_sepiteng'); ?>
		<?php echo CHtml::dropDownList(
						'Perumahan[jarak_sumber_air_sepiteng]',$model->jarak_sumber_air_sepiteng,
						array(
							''=>'Semua',
							'< 10 M'=>'< 10 M',
							'> 10 M'=>'> 10 M',
							'Tidak tahu'=>'Tidak tahu',
						)
					); 
				?>
		<?php echo $form->error($model,'jarak_sumber_air_sepiteng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penggunaan_tempat_buang_air'); ?>
		<?php echo CHtml::dropDownList(
						'Perumahan[penggunaan_tempat_buang_air]',$model->penggunaan_tempat_buang_air,
						array(
							''=>'Semua',
							'Sendiri'=>'Sendiri',
							'Bersama'=>'Bersama',
							'Umum'=>'Umum',
							'Tidak ada'=>'Tidak ada',
						)
					); 
				?>
		<?php echo $form->error($model,'penggunaan_tempat_buang_air'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>