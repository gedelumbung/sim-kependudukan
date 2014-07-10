<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */
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
	'id'=>'sanitasi-survey-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


	<div class="row-fluid">
		<div class="span6">
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
				<?php echo $form->labelEx($model,'kepemilikan_jamban'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[kepemilikan_jamban]',$model->kepemilikan_jamban,
								array(
									''=>'Semua',
									'Memiliki'=>'Memiliki',
									'Tidak Memiliki'=>'Tidak Memiliki',
								)
							); ?>
				<?php echo $form->error($model,'kepemilikan_jamban'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jumlah_kepemilikan_jamban'); ?>
				<?php echo $form->textField($model,'jumlah_kepemilikan_jamban',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jumlah_kepemilikan_jamban'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jenis_jamban'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[jenis_jamban]',$model->jenis_jamban,
								array(
									''=>'Semua',
									'Leher angsa'=>'Leher angsa',
									'Plensengan'=>'Plensengan',
									'Cemplung'=>'Cemplung',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'jenis_jamban'); ?>
			</div>

		</div>
		<div class="span6">

			<div class="row">
				<?php echo $form->labelEx($model,'jamban_alternatif'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[jamban_alternatif]',$model->jamban_alternatif,
								array(
									''=>'Semua',
									'Jamban/Toilet Umum'=>'Jamban/Toilet Umum',
									'Pantai/Sungai/Empang/Parit'=>'Pantai/Sungai/Empang/Parit',
									'Sawah/Kebun'=>'Sawah/Kebun',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'jamban_alternatif'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'sumber_penerangan'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[sumber_penerangan]',$model->sumber_penerangan,
								array(
									''=>'Semua',
									'Listrik PLN Milik Sendiri'=>'Listrik PLN Milik Sendiri',
									'Listrik PLN Sambung (Bayar)'=>'Listrik PLN Sambung (Bayar)',
									'Listrik PLN Sambung (Gratis)'=>'Listrik PLN Sambung (Gratis)',
									'Listrik Non PLN'=>'Listrik Non PLN',
									'Lampu Petromax'=>'Lampu Petromax',
									'Pelita/Lilin'=>'Pelita/Lilin',
									'Tidak ada penerangan'=>'Tidak ada penerangan',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'sumber_penerangan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'sumber_air_bersih'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[sumber_air_bersih]',$model->sumber_air_bersih,
								array(
									''=>'Semua',
									'Air Ledeng/PDAM'=>'Air Ledeng/PDAM',
									'Sumur Bor/Sumur Pompa/Sumur Tertutup'=>'Sumur Bor/Sumur Pompa/Sumur Tertutup',
									'Sumur Terbuka/Tidak terlindungi'=>'Sumur Terbuka/Tidak terlindungi',
									'Kolam/empang/parit'=>'Kolam/empang/parit',
								)
							); ?>
				<?php echo $form->error($model,'sumber_air_bersih'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kualitas_air_bersih'); ?>
				<?php echo CHtml::dropDownList(
							'SanitasiSurvey[kualitas_air_bersih]',$model->kualitas_air_bersih,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Buruk'=>'Buruk',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'kualitas_air_bersih'); ?>
			</div>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>