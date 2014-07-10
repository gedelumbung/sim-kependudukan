<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */
/* @var $form CActiveForm */
?>

<style type="text/css">
	select{
		width:100%;
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
	'id'=>'informasi-tambahan-survey-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row-fluid">
		<div class="span6">
			<?php $model->id_rt = $id; ?>
			<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'id_rt'); ?>
				<?php echo CHtml::dropDownList(
								'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
				<?php echo $form->error($model,'id_rt'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'drainase'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[drainase]',$model->drainase,
								array(
									''=>'Semua',
									'Ada'=>'Ada',
									'Tidak Ada'=>'Tidak Ada',
								)
							); ?>
				<?php echo $form->error($model,'drainase'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bentuk_drainase'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[bentuk_drainase]',$model->bentuk_drainase,
								array(
									''=>'Semua',
									'Tembok'=>'Tembok',
									'Tanah'=>'Tanah',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'bentuk_drainase'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'fungsi_drainase'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[fungsi_drainase]',$model->fungsi_drainase,
								array(
									''=>'Semua',
									'Berfungsi'=>'Berfungsi',
									'Tidak Berfungsi'=>'Tidak Berfungsi',
								)
							); ?>
				<?php echo $form->error($model,'fungsi_drainase'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kualitas_drainase'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[kualitas_drainase]',$model->kualitas_drainase,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Rusak Ringan'=>'Rusak Ringan',
									'Rusak Berat'=>'Rusak Berat',
								)
							); ?>
				<?php echo $form->error($model,'kualitas_drainase'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'klasifikasi_drainase'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[klasifikasi_drainase]',$model->klasifikasi_drainase,
								array(
									''=>'Semua',
									'Primer'=>'Primer',
									'Sekunder'=>'Sekunder',
									'Tersier'=>'Tersier',
								)
							); ?>
				<?php echo $form->error($model,'klasifikasi_drainase'); ?>
			</div>
		</div>

		<div class="span6">

			<div class="row">
				<?php echo $form->labelEx($model,'penanganan_limbah_rt'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[penanganan_limbah_rt]',$model->penanganan_limbah_rt,
								array(
									''=>'Semua',
									'Dialirkan ke dalam tanah (dibuat secara khusus)'=>'Dialirkan ke dalam tanah (dibuat secara khusus)',
									'Dialirkan ke dalam tanah (tidak dibuat secara khusus)'=>'Dialirkan ke dalam tanah (tidak dibuat secara khusus)',
									'Dibiarkan tergenang'=>'Dibiarkan tergenang',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'penanganan_limbah_rt'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'status_jalan_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[status_jalan_rumah]',$model->status_jalan_rumah,
								array(
									''=>'Semua',
									'Jalan negara'=>'Jalan negara',
									'Jalan provinsi'=>'Jalan provinsi',
									'Jalan kabupaten'=>'Jalan kabupaten',
									'Jalan desa/lingkungan'=>'Jalan desa/lingkungan',
									'Jalan Lainnya'=>'Jalan Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'status_jalan_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bentuk_fisik_permukaan_jalan'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[bentuk_fisik_permukaan_jalan]',$model->bentuk_fisik_permukaan_jalan,
								array(
									''=>'Semua',
									'Aspal butas/hotmix'=>'Aspal butas/hotmix',
									'Beton'=>'Beton',
									'Aspal lapen'=>'Aspal lapen',
									'Paving Blok'=>'Paving Blok',
									'Sirtu'=>'Sirtu',
									'Tanah'=>'Tanah',
								)
							); ?>
				<?php echo $form->error($model,'bentuk_fisik_permukaan_jalan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kualitas_jalan'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[kualitas_jalan]',$model->kualitas_jalan,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Rusak ringan'=>'Rusak ringan',
									'Rusak berat'=>'Rusak berat',
								)
							); ?>
				<?php echo $form->error($model,'kualitas_jalan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'fungsi_jalan'); ?>
				<?php echo CHtml::dropDownList(
							'InformasiTambahanSurvey[fungsi_jalan]',$model->fungsi_jalan,
								array(
									''=>'Semua',
									'Arteri primer'=>'Arteri primer',
									'Arteri sekunder'=>'Arteri sekunder',
									'Kolektor primer'=>'Kolektor primer',
									'Kolektor sekunder'=>'Kolektor sekunder',
									'Lokal primer'=>'Lokal primer',
									'Lokal sekunder'=>'Lokal sekunder',
								)
							); ?>
				<?php echo $form->error($model,'fungsi_jalan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'nama_jalan'); ?>
				<?php echo $form->textField($model,'nama_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nama_jalan'); ?>
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