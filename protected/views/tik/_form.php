<?php
/* @var $this TikController */
/* @var $model Tik */
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
	'id'=>'tik-form',
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

	<h5>1. Apakah di RT ini ada telepon?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[telepon]',$model->telepon,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<h5>2. Apakah ada ART yang mempunyai telepon seluler (HP) ?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'handphone'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[handphone]',$model->handphone,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
		<?php echo $form->error($model,'handphone'); ?>
	</div>

	<h5>Jumlah nomor yang dimiliki RT ini</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_no_handphone'); ?>
		<?php echo $form->textField($model,'jumlah_no_handphone',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_no_handphone'); ?>
	</div>

	<h5>3. Apakah RT ini mempunyai komputer (desktop, laptop, notebook)?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'komputer'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[komputer]',$model->komputer,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
		<?php echo $form->error($model,'komputer'); ?>
	</div>

	<h5>4. Apakah RT ini menggunakan komputer untuk akses internet selama sebulan yang lalu?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'internet'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[internet]',$model->internet,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
		<?php echo $form->error($model,'internet'); ?>
	</div>

	<h5>Jika "Ya", berapa jumlah ART yang menggunakan fasilitas tersebut?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_pengguna_internet'); ?>
		<?php echo $form->textField($model,'jumlah_pengguna_internet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_pengguna_internet'); ?>
	</div>

	<h5>5. Penggunaan internet di luar rumah</h5>

	<div>
		<div class="row fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'internet_warnet'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[internet_warnet]',$model->internet_warnet,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'internet_warnet'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'jumlah_pengguna_internet_warnet'); ?>
					<?php echo $form->textField($model,'jumlah_pengguna_internet_warnet',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'jumlah_pengguna_internet_warnet'); ?>
				</div>
			</div>
		</div>
		<div class="row fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'internet_kantor_sekolah'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[internet_kantor_sekolah]',$model->internet_kantor_sekolah,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'internet_kantor_sekolah'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'jumlah_pengguna_internet_kantor_sekolah'); ?>
					<?php echo $form->textField($model,'jumlah_pengguna_internet_kantor_sekolah',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'jumlah_pengguna_internet_kantor_sekolah'); ?>
				</div>
			</div>
		</div>
		<div class="row fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'internet_lainnya'); ?>
					<?php echo CHtml::dropDownList(
								'Tik[internet_lainnya]',$model->internet_lainnya,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'internet_lainnya'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'jumlah_pengguna_internet_lainnya'); ?>
					<?php echo $form->textField($model,'jumlah_pengguna_internet_lainnya',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'jumlah_pengguna_internet_lainnya'); ?>
				</div>
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