<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */
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
	'id'=>'kebersihan-survey-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
			
			<?php //echo $form->errorSummary($model); ?>
	
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
				<?php echo $form->labelEx($model,'tps'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[tps]',$model->tps,
								array(
									''=>'Semua',
									'Memiliki'=>'Memiliki',
									'Tidak Memiliki'=>'Tidak Memiliki',
								)
							); ?>
				<?php echo $form->error($model,'tps'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bentuk_tps'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[bentuk_tps]',$model->bentuk_tps,
								array(
									''=>'Semua',
									'Tong / sampah tertutup'=>'Tong / sampah tertutup',
									'Tong / sampah terbuka'=>'Tong / sampah terbuka',
									'Karung / kardus'=>'Karung / kardus',
									'Lubang / galian'=>'Lubang / galian',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'bentuk_tps'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pemilihan_sampah'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[pemilihan_sampah]',$model->pemilihan_sampah,
								array(
									''=>'Semua',
									'Dilakukan pemilihan'=>'Dilakukan pemilihan',
									'Tidak Dilakukan pemilihan'=>'Tidak Dilakukan pemilihan',
								)
							); ?>
				<?php echo $form->error($model,'pemilihan_sampah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tps_alternatif'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[tps_alternatif]',$model->tps_alternatif,
								array(
									''=>'Semua',
									'Dibakar'=>'Dibakar',
									'Dibuang ke pantai'=>'Dibuang ke pantai',
									'Dibuang ke sungai'=>'Dibuang ke sungai',
									'dibuang ke lahan kosong'=>'dibuang ke lahan kosong',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'tps_alternatif'); ?>
			</div>
		</div>

		<div class="span6">

			<div class="row">
				<?php echo $form->labelEx($model,'layanan_tps_keliling'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[layanan_tps_keliling]',$model->layanan_tps_keliling,
								array(
									''=>'Semua',
									'Berlangganan'=>'Berlangganan',
									'Tidak Berlangganan'=>'Tidak Berlangganan',
								)
							); ?>
				<?php echo $form->error($model,'layanan_tps_keliling'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'intensitas_pengangkutan_sampah'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[intensitas_pengangkutan_sampah]',$model->intensitas_pengangkutan_sampah,
								array(
									''=>'Semua',
									'Setiap hari'=>'Setiap hari',
									'Tiga kali seminggu'=>'Tiga kali seminggu',
									'Dua kali seminggu'=>'Dua kali seminggu',
									'Sekali seminggu'=>'Sekali seminggu',
									'Dua kali sebulan'=>'Dua kali sebulan',
									'Lebih dari 2 kali sebulan'=>'Lebih dari 2 kali sebulan',
									'Tidak menentu'=>'Tidak menentu',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'intensitas_pengangkutan_sampah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'alasan_tidak_berlangganan'); ?>
				<?php echo $form->textField($model,'alasan_tidak_berlangganan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'alasan_tidak_berlangganan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'keanggotaan_urusan_sampah'); ?>
				<?php echo CHtml::dropDownList(
							'KebersihanSurvey[keanggotaan_urusan_sampah]',$model->keanggotaan_urusan_sampah,
								array(
									''=>'Semua',
									'Anggota'=>'Anggota',
									'Tidak Anggota'=>'Tidak Anggota',
								)
							); ?>
				<?php echo $form->error($model,'keanggotaan_urusan_sampah'); ?>
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