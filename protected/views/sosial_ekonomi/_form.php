<?php
/* @var $this Sosial_ekonomiController */
/* @var $model SosialEkonomi */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sosial-ekonomi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


	<div class="row-fluid">
		<div class="span12">
			<?php //echo $form->errorSummary($model); ?>
	
			<?php $model->id_rt = $id; ?>
			<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'id_rt'); ?>
				<?php echo CHtml::dropDownList(
								'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
				<?php echo $form->error($model,'id_rt'); ?>
			</div>

			<h5>1. Menurut anda, apakah rumah tangga anda dikategorikan miskin?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_miskin'); ?>
		<?php echo $form->textField($model,'kategori_miskin',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kategori_miskin'); ?>
	</div>

	<h5>2. Apakah rt pernah mempunyai jamkesmas, jampersal, jamkesda?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'kartu_kesehatan'); ?>
		<?php echo $form->textField($model,'kartu_kesehatan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kartu_kesehatan'); ?>
	</div>

	<h5>Kapan memperolehnya?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'memperoleh_kartu_kesehatan'); ?>
		<?php echo $form->textField($model,'memperoleh_kartu_kesehatan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'memperoleh_kartu_kesehatan'); ?>
	</div>

	<h5>Pemanfaatan/penggunaan jamkesmas, jampersal dan jamkesda</h5>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Berapa kali digunakan selama 3 bulan?</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Jika 0, berapa biaya yang dikeluarkan?</h5>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Rawat jalan/inap</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'rawat_jalan_inap_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rawat_jalan_inap_kartu_kesehatan_3_bulan'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'biaya_rawat_jalan_inap',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_rawat_jalan_inap'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Melahirkan/periksa kehamilan</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'melahirkan_kehamilan_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'melahirkan_kehamilan_kartu_kesehatan_3_bulan'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'biaya_melahirkan_kehamilan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_melahirkan_kehamilan'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Keperluan KB</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'keperluan_kb_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'keperluan_kb_kartu_kesehatan_3_bulan'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'biaya_keperluan_kb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_keperluan_kb'); ?>
			</div>
		</div>
	</div>

	<hr>

	<h5>3. Apakah pernah membeli beras murah raskin selama 3 bulan terakhir?</h5>
	<div class="row">
		<?php echo $form->labelEx($model,'beras_murah'); ?>
		<?php echo $form->textField($model,'beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'beras_murah'); ?>
	</div>

	<h5>Berapa kg beras yang dibeli?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_beras_murah'); ?>
		<?php echo $form->textField($model,'jumlah_beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_beras_murah'); ?>
	</div>

	<h5>Berapa rupiah per-kg yang biasanya dibayar?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_beras_murah'); ?>
		<?php echo $form->textField($model,'harga_beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'harga_beras_murah'); ?>
	</div>

	<h5>4. Apakah menerima kredit usaha (<= 10 juta) selama setahun terakhir?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'kredit_usaha'); ?>
		<?php echo $form->textField($model,'kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kredit_usaha'); ?>
	</div>

	<h5>Berapa jumlah kredit usaha yang diterima setahun terakhir?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_kredit_usaha'); ?>
		<?php echo $form->textField($model,'jumlah_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah_kredit_usaha'); ?>
	</div>

	<h5>Berapa persen bunga pertahun yang harus dibayarkan? (kredit yang terbesar)</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'bunga_kredit_usaha'); ?>
		<?php echo $form->textField($model,'bunga_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'bunga_kredit_usaha'); ?>
	</div>

	<h5>Sumber kredit usaha (yang terbesar)</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_kredit_usaha'); ?>
		<?php echo $form->textField($model,'sumber_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'sumber_kredit_usaha'); ?>
	</div>

	<h5>5. Apakah ada art/mantan art yang sedang/pernah bekerja sebagai TKI?</h5>

	<div class="row">
		<?php echo $form->labelEx($model,'art_sebagai_tki'); ?>
		<?php echo $form->textField($model,'art_sebagai_tki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'art_sebagai_tki'); ?>
	</div>

	<h5>Jika Ya, tuliskan art menurut jenis pekerjaannya dan tahun berapa mulai bekerja?</h5>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Jumlah</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Tahun mulai bekerja</h5>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Perawat</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_perawat_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_perawat_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_perawat_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_perawat_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Pembantu RT</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_pembantu_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_pembantu_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_pembantu_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_pembantu_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Supir</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_supir_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_supir_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_supir_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_supir_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Tukang Bangunan</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_tukang_bangunan_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_tukang_bangunan_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_tukang_bangunan_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_tukang_bangunan_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Buruh Perkebunan</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_buruh_perkebunan_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_buruh_perkebunan_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_buruh_perkebunan_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_buruh_perkebunan_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Buruh pabrik</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_buruh_pabrik_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_buruh_pabrik_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'tki_buruh_pabrik_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tki_buruh_pabrik_tahun'); ?>
			</div>
		</div>
	</div>

	<hr>

	<h5>6. Bila ada art yang bersekolah, apakah mendapat beasiswa pada tahun ajaran satu tahun terakhir dari sumber berikut</h5>

	<div class="row-fluid">
		<div class="span6">
			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_pemerintah_jps'); ?>
				<?php echo $form->textField($model,'beasiswa_pemerintah_jps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_pemerintah_jps'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_pemerintah_non_jps'); ?>
				<?php echo $form->textField($model,'beasiswa_pemerintah_non_jps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_pemerintah_non_jps'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_gn_ota'); ?>
				<?php echo $form->textField($model,'beasiswa_gn_ota',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_gn_ota'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_swasta'); ?>
				<?php echo $form->textField($model,'beasiswa_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_swasta'); ?>
			</div>
		</div>
		<div class="span6">
			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_sekolah'); ?>
				<?php echo $form->textField($model,'beasiswa_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_sekolah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_perorangan'); ?>
				<?php echo $form->textField($model,'beasiswa_perorangan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_perorangan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'beasiswa_lainnya'); ?>
				<?php echo $form->textField($model,'beasiswa_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_lainnya'); ?>
			</div>
		</div>
	</div>

	<h5>Jika 6.a 1=Ya, penerimaan beasiswa dari pemerintah JPS</h5>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Jumlah ART penerima</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<h5>Tahun</h5>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>SD</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_sd_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_sd_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_sd_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_sd_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>SD</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_smp_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_smp_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_smp_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_smp_tahun'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>SD</h5>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_sma_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_sma_jumlah'); ?>
			</div>
		</div>
		<div class="span4">
			<div class="row">
				<?php echo $form->textField($model,'beasiswa_sma_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beasiswa_sma_tahun'); ?>
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