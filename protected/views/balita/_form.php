<?php
/* @var $this BalitaController */
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

<div class="row-fluid">
	<div class="span6">
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

		<h5>11. Umur balita jika kurang dari 12 bulan, tuliskan jumlah bulan. Jika lebih dari 12 bulan, tuliskan jumlah tahun</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'umur_balita'); ?>
			<?php echo $form->textField($model,'umur_balita',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'umur_balita'); ?>
		</div>

		<h5>12. Siapa saja yang meolong proses kelahiran?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'penolong_kelahiran_1'); ?>
				<?php echo CHtml::dropDownList(
								'ArtPerorangan[penolong_kelahiran_1]',$model->penolong_kelahiran_1,
								array(
									''=>'Semua',
									'Dokter'=>'Dokter',
									'Bidan'=>'Bidan',
									'Tenaga paramedis lain'=>'Tenaga paramedis lain',
									'Dukun'=>'Dukun',
									'Famili/Keluarga'=>'Famili/Keluarga',
									'Lainnya'=>'Lainnya',
									)
								); 
							?>
			<?php echo $form->error($model,'penolong_kelahiran_1'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'penolong_kelahiran_2'); ?>
				<?php echo CHtml::dropDownList(
								'ArtPerorangan[penolong_kelahiran_2]',$model->penolong_kelahiran_2,
								array(
									''=>'Semua',
									'Dokter'=>'Dokter',
									'Bidan'=>'Bidan',
									'Tenaga paramedis lain'=>'Tenaga paramedis lain',
									'Dukun'=>'Dukun',
									'Famili/Keluarga'=>'Famili/Keluarga',
									'Lainnya'=>'Lainnya',
									)
								); 
							?>
			<?php echo $form->error($model,'penolong_kelahiran_2'); ?>
		</div>

		<h5>13. Berapa kali anak sudah mendapatkan imunisasi?</h5>

		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'imunisasi_bcg'); ?>
					<?php echo $form->textField($model,'imunisasi_bcg',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'imunisasi_bcg'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'imunisasi_dpt'); ?>
					<?php echo $form->textField($model,'imunisasi_dpt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'imunisasi_dpt'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'imunisasi_polio'); ?>
					<?php echo $form->textField($model,'imunisasi_polio',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'imunisasi_polio'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'imunisasi_campak'); ?>
					<?php echo $form->textField($model,'imunisasi_campak',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'imunisasi_campak'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'imunisasi_hepatitis_b'); ?>
					<?php echo $form->textField($model,'imunisasi_hepatitis_b',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'imunisasi_hepatitis_b'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="span6">

		<h5>14. Apakah pernah diberi ASI?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'asi'); ?>
					<?php echo CHtml::dropDownList(
								'ArtPerorangan[asi]',$model->asi,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'asi'); ?>
		</div>

		<h5>Jika Ya, isikan dalam hari bila umur < 1 bulan dan dalam bulan bilsa umur >= 1 bulan</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'lama_pemberian_asi'); ?>
			<?php echo $form->textField($model,'lama_pemberian_asi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'lama_pemberian_asi'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'diberi_asi_saja'); ?>
			<?php echo $form->textField($model,'diberi_asi_saja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'diberi_asi_saja'); ?>
		</div>

		<h5>Jika berumur kurang dari 7 bulan, apakah diberi ASI saja dalam 24 jam terakhir?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'asi_24_jam'); ?>
					<?php echo CHtml::dropDownList(
								'ArtPerorangan[asi_24_jam]',$model->asi_24_jam,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'asi_24_jam'); ?>
		</div>

		<h5>15. Apakah pernah dilakukan pemeriksaan kehamilan oleh nakes (dokter/bidan/perawat) ketika anak </h5>

		<div class="row">
			<?php echo $form->labelEx($model,'pemeriksaan_kehamilan'); ?>
					<?php echo CHtml::dropDownList(
								'ArtPerorangan[pemeriksaan_kehamilan]',$model->pemeriksaan_kehamilan,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'pemeriksaan_kehamilan'); ?>
		</div>

		<h5>Jika Ya, isikan frekuensi pemeriksaam kehamilan yang dilakukan setiap :</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_1'); ?>
			<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_1'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_2'); ?>
			<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_2'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pemeriksaan_kehamilan_trisemester_3'); ?>
			<?php echo $form->textField($model,'pemeriksaan_kehamilan_trisemester_3',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'pemeriksaan_kehamilan_trisemester_3'); ?>
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