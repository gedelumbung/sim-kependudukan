<?php
/* @var $this KetenagakerjaanController */
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

		<h5>
			23. Apakah melakukan kegiatan seperti di bawah ini selama seminggu lalu? 
			<p>Untuk ART berumur 10 tahun ke atas</p>
		</h5>
		
		<div class="row-fluid">
			<div class="span6">

				<div class="row">
					<?php echo $form->labelEx($model,'bekerja'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[bekerja]',$model->bekerja,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'bekerja'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'sekolah'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[sekolah]',$model->sekolah,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'sekolah'); ?>
				</div>
			</div>
			<div class="span6">

				<div class="row">
					<?php echo $form->labelEx($model,'mengurus_rt'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[mengurus_rt]',$model->mengurus_rt,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'mengurus_rt'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'lainnya'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[lainnya]',$model->lainnya,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'lainnya'); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kegiatan_terbanyak'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[bekerja]',$model->bekerja,
												array(
													''=>'Semua',
													'Bekerja'=>'Bekerja',
													'Sekolah'=>'Sekolah',
													'Mengurus RT'=>'Mengurus RT',
													'Lainnya'=>'Lainnya',
												)
											); 
										?>
			<?php echo $form->error($model,'kegiatan_terbanyak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tidak_bekerja_sementara'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[tidak_bekerja_sementara]',$model->tidak_bekerja_sementara,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'tidak_bekerja_sementara'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'mencari_pekerjaan'); ?>
								<?php echo CHtml::dropDownList(
												'ArtPerorangan[mencari_pekerjaan]',$model->mencari_pekerjaan,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'mencari_pekerjaan'); ?>
		</div>
	</div>

	<div class="span6">

		<div class="row">
			<?php echo $form->labelEx($model,'membuat_usaha'); ?>
			<?php echo $form->textField($model,'membuat_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'membuat_usaha'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'alasan_tidak_bekerja'); ?>
			<?php echo $form->textField($model,'alasan_tidak_bekerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'alasan_tidak_bekerja'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jika_ada_tawaran'); ?>
			<?php echo $form->textField($model,'jika_ada_tawaran',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jika_ada_tawaran'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'hari_kerja'); ?>
			<?php echo $form->textField($model,'hari_kerja',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'hari_kerja'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jumlah_jam_kerja_seminggu'); ?>
			<?php echo $form->textField($model,'jumlah_jam_kerja_seminggu',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jumlah_jam_kerja_seminggu'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'lapangan_usaha'); ?>
			<?php echo $form->textField($model,'lapangan_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'lapangan_usaha'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_pekerjaan'); ?>
			<?php echo $form->textField($model,'jenis_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jenis_pekerjaan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jabatan_pekerjaan'); ?>
			<?php echo $form->textField($model,'jabatan_pekerjaan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'jabatan_pekerjaan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'gaji'); ?>
			<?php echo $form->textField($model,'gaji',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'gaji'); ?>
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