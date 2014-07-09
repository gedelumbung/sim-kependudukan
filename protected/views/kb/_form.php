<?php
/* @var $this KbController */
/* @var $model ArtPerorangan */
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
	'id'=>'art-perorangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

		<h5>Untuk wanita berumur 10 tahun ke atas<p>Wanita pernah kawin</p></h5>

		<div class="row">
			<?php echo $form->labelEx($model,'id_art'); ?>
			<?php
				$criteria = new CDbCriteria;
				$criteria->condition = "id_rt = '".$id."'";
			?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[id_art]',$model->id_art,array(''=>'Semua') + CHtml::listData(Art::model()->findAll($criteria),'id_art','nama_art')); ?>
			<?php echo $form->error($model,'id_art'); ?>
		</div>

		<h5>34. Umur pada saat pernikahan</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'umur_saat_nikah'); ?>
			<?php echo $form->textField($model,'umur_saat_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'umur_saat_nikah'); ?>
		</div>

		<h5>35. Jumlah tahun dalam ikatan perkawinan</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'jumlah_tahun_nikah'); ?>
			<?php echo $form->textField($model,'jumlah_tahun_nikah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jumlah_tahun_nikah'); ?>
		</div>

		<h5>36. Jumlah anak kandung yang dilahirkan</h5>

		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_lahir_hidup_laki'); ?>
					<?php echo $form->textField($model,'anak_lahir_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_lahir_hidup_laki'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_lahir_hidup_perempuan'); ?>
					<?php echo $form->textField($model,'anak_lahir_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_lahir_hidup_perempuan'); ?>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_lahir_masih_hidup_laki'); ?>
					<?php echo $form->textField($model,'anak_lahir_masih_hidup_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_lahir_masih_hidup_laki'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_lahir_masih_hidup_perempuan'); ?>
					<?php echo $form->textField($model,'anak_lahir_masih_hidup_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_lahir_masih_hidup_perempuan'); ?>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_meninggal_laki'); ?>
					<?php echo $form->textField($model,'anak_meninggal_laki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_meninggal_laki'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'anak_meninggal_perempuan'); ?>
					<?php echo $form->textField($model,'anak_meninggal_perempuan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'anak_meninggal_perempuan'); ?>
				</div>
			</div>
		</div>

		<h5>37. Pernah menggunakan/memakai alat/cara kb</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'alat_kb'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[alat_kb]',$model->alat_kb,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'alat_kb'); ?>
		</div>

		<h5>Wanita berstatus Kawin</h5>

		<h5>38. Apakah sedang menggunakan/memakai alat/cara KB</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'memakai_alat_kb'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[memakai_alat_kb]',$model->memakai_alat_kb,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'memakai_alat_kb'); ?>
		</div>

		<h5>39. Alat/Cara KB yang sedang digunakan</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'alat_kb_dipakai'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[alat_kb_dipakai]',$model->alat_kb_dipakai,
												array(
													''=>'Semua',
													'MOW/Tubektomi'=>'MOW/Tubektomi',
													'MOP/Vasektomi'=>'MOP/Vasektomi',
													'AKRD/IUD/Spiral'=>'AKRD/IUD/Spiral',
													'Suntikan KB'=>'Suntikan KB',
													'Susuk KB/norplan/implanon/alwait'=>'Susuk KB/norplan/implanon/alwait',
													'Pil KB'=>'Pil KB',
													'Kondom/Karet KB'=>'Kondom/Karet KB',
													'Intravag/tissue/kondom wanita'=>'Intravag/tissue/kondom wanita',
													'Cara tradisional'=>'Cara tradisional',
												)
											); 
										?>
			<?php echo $form->error($model,'alat_kb_dipakai'); ?>
		</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>