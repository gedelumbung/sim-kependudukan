<?php
/* @var $this KesehatanController */
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

		<div class="row">
			<?php echo $form->labelEx($model,'no_urut_ibu_kandung'); ?>
			<?php echo $form->textField($model,'no_urut_ibu_kandung',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'no_urut_ibu_kandung'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kehadiran_wawancara'); ?>
				<?php echo CHtml::dropDownList(
								'ArtPerorangan[kehadiran_wawancara]',$model->kehadiran_wawancara,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'kehadiran_wawancara'); ?>
		</div>

		<h5>1. Apakah dalam 1 bulan terakhir mempunyai keluhan kesehatan seperti di bawah ini?</h5>

		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_panas'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_panas]',$model->keluhan_panas,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_panas'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_batuk'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_batuk]',$model->keluhan_batuk,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_batuk'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_pilek'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_pilek]',$model->keluhan_pilek,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_pilek'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_asma'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_asma]',$model->keluhan_asma,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_asma'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_diare'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_diare]',$model->keluhan_diare,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_diare'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_sakit_kepala'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_sakit_kepala]',$model->keluhan_sakit_kepala,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_sakit_kepala'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_sakit_gigi'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_sakit_gigi]',$model->keluhan_sakit_gigi,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_sakit_gigi'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'keluhan_lainnya'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[keluhan_lainnya]',$model->keluhan_lainnya,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'keluhan_lainnya'); ?>
				</div>
			</div>
		</div>

		<h5>2. Jika ada keluhan, apakah menyebabkan terganggunya kegiatan sehari-hari?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'implikasi_keluhan'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[implikasi_keluhan]',$model->implikasi_keluhan,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'implikasi_keluhan'); ?>
		</div>

		<h5>3. Lamanya terganggu?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'lama_implikasi'); ?>
			<?php echo $form->textField($model,'lama_implikasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'lama_implikasi'); ?>
		</div>

		<h5>4. Apakah sekarang masih terganggu?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'masih_implikasi'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[masih_implikasi]',$model->masih_implikasi,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'masih_implikasi'); ?>
		</div>

		<h5>5. Apakah pernah mengobati sendiri dalam 1 bulan terakhir?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'pengobatan_sendiri'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[pengobatan_sendiri]',$model->pengobatan_sendiri,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'pengobatan_sendiri'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jenis_pengobatan_sendiri'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[jenis_pengobatan_sendiri]',$model->jenis_pengobatan_sendiri,array(''=>'Semua','Tradisional'=>'Tradisional','Modern'=>'Modern','Lainnya'=>'Lainnya')); ?>
			<?php echo $form->error($model,'jenis_pengobatan_sendiri'); ?>
		</div>
	</div>

	<div class="span6">

		<h5>6. Apakah pernah berobat dalam 1 bulan terakhir?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'pengobatan_jalan'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[pengobatan_jalan]',$model->pengobatan_sendiri,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'pengobatan_jalan'); ?>
		</div>

		<h5>7. Berapa kali berobat jalan selama 1 bulan terakhir?</h5>

		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_rs_pemerintah'); ?>
					<?php echo $form->textField($model,'berobat_jalan_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_rs_pemerintah'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_rs_swasta'); ?>
					<?php echo $form->textField($model,'berobat_jalan_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_rs_swasta'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_poliklinik'); ?>
					<?php echo $form->textField($model,'berobat_jalan_poliklinik',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_poliklinik'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_puskesmas'); ?>
					<?php echo $form->textField($model,'berobat_jalan_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_puskesmas'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_nakes'); ?>
					<?php echo $form->textField($model,'berobat_jalan_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_nakes'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_batra'); ?>
					<?php echo $form->textField($model,'berobat_jalan_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_batra'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_dukun'); ?>
					<?php echo $form->textField($model,'berobat_jalan_dukun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_dukun'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'berobat_jalan_lainnya'); ?>
					<?php echo $form->textField($model,'berobat_jalan_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'berobat_jalan_lainnya'); ?>
				</div>
			</div>
		</div>

		<h5>8. Apakah pernah dirawat inap dalam 1 tahun terakhir?</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'rawat_inap'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[rawat_inap]',$model->rawat_inap,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'rawat_inap'); ?>
		</div>

		<h5>9. Lamanya rawat inap (dalam hari)</h5>

		<div class="row-fluid">
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'rawat_inap_rs_pemerintah'); ?>
					<?php echo $form->textField($model,'rawat_inap_rs_pemerintah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'rawat_inap_rs_pemerintah'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'rawat_inap_rs_swasta'); ?>
					<?php echo $form->textField($model,'rawat_inap_rs_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'rawat_inap_rs_swasta'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'rawat_inap_puskesmas'); ?>
					<?php echo $form->textField($model,'rawat_inap_puskesmas',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
					<?php echo $form->error($model,'rawat_inap_puskesmas'); ?>
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<div class="row">
						<?php echo $form->labelEx($model,'rawat_inap_nakes'); ?>
						<?php echo $form->textField($model,'rawat_inap_nakes',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
						<?php echo $form->error($model,'rawat_inap_nakes'); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'rawat_inap_batra'); ?>
						<?php echo $form->textField($model,'rawat_inap_batra',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
						<?php echo $form->error($model,'rawat_inap_batra'); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'rawat_inap_lainnya'); ?>
						<?php echo $form->textField($model,'rawat_inap_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
						<?php echo $form->error($model,'rawat_inap_lainnya'); ?>
					</div>
			</div>
		</div>

		<h5>10. Apakah tersedia jaminan pembiayaan/asuransi kesehatan untuk keperluan berobat jalan/rawat inap?</h5>

		<div class="row-fluid">
			
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'jamkesmas'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[jamkesmas]',$model->jamkesmas,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'jamkesmas'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'jamkesda'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[jamkesda]',$model->jamkesda,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'jamkesda'); ?>
				</div>
			</div>
			
			<div class="span6">
				<div class="row">
					<?php echo $form->labelEx($model,'jampersal'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[jampersal]',$model->jampersal,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'jampersal'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'bpjs'); ?>
						<?php echo CHtml::dropDownList(
										'ArtPerorangan[bpjs]',$model->bpjs,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
					<?php echo $form->error($model,'bpjs'); ?>
				</div>
			</div>

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