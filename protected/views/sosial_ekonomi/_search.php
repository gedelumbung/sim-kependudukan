<?php
/* @var $this Sosial_ekonomiController */
/* @var $model SosialEkonomi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sosial_ekonomi'); ?>
		<?php echo $form->textField($model,'id_sosial_ekonomi', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rt'); ?>
		<?php echo $form->textField($model,'id_rt', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_miskin'); ?>
		<?php echo $form->textField($model,'kategori_miskin',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kartu_kesehatan'); ?>
		<?php echo $form->textField($model,'kartu_kesehatan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memperoleh_kartu_kesehatan'); ?>
		<?php echo $form->textField($model,'memperoleh_kartu_kesehatan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rawat_jalan_inap_kartu_kesehatan_3_bulan'); ?>
		<?php echo $form->textField($model,'rawat_jalan_inap_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_rawat_jalan_inap'); ?>
		<?php echo $form->textField($model,'biaya_rawat_jalan_inap',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'melahirkan_kehamilan_kartu_kesehatan_3_bulan'); ?>
		<?php echo $form->textField($model,'melahirkan_kehamilan_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_melahirkan_kehamilan'); ?>
		<?php echo $form->textField($model,'biaya_melahirkan_kehamilan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keperluan_kb_kartu_kesehatan_3_bulan'); ?>
		<?php echo $form->textField($model,'keperluan_kb_kartu_kesehatan_3_bulan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_keperluan_kb'); ?>
		<?php echo $form->textField($model,'biaya_keperluan_kb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beras_murah'); ?>
		<?php echo $form->textField($model,'beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_beras_murah'); ?>
		<?php echo $form->textField($model,'jumlah_beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_beras_murah'); ?>
		<?php echo $form->textField($model,'harga_beras_murah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kredit_usaha'); ?>
		<?php echo $form->textField($model,'kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_kredit_usaha'); ?>
		<?php echo $form->textField($model,'jumlah_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bunga_kredit_usaha'); ?>
		<?php echo $form->textField($model,'bunga_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_kredit_usaha'); ?>
		<?php echo $form->textField($model,'sumber_kredit_usaha',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art_sebagai_tki'); ?>
		<?php echo $form->textField($model,'art_sebagai_tki',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_perawat_jumlah'); ?>
		<?php echo $form->textField($model,'tki_perawat_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_perawat_tahun'); ?>
		<?php echo $form->textField($model,'tki_perawat_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_pembantu_jumlah'); ?>
		<?php echo $form->textField($model,'tki_pembantu_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_pembantu_tahun'); ?>
		<?php echo $form->textField($model,'tki_pembantu_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_supir_jumlah'); ?>
		<?php echo $form->textField($model,'tki_supir_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_supir_tahun'); ?>
		<?php echo $form->textField($model,'tki_supir_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_tukang_bangunan_jumlah'); ?>
		<?php echo $form->textField($model,'tki_tukang_bangunan_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_tukang_bangunan_tahun'); ?>
		<?php echo $form->textField($model,'tki_tukang_bangunan_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_buruh_perkebunan_jumlah'); ?>
		<?php echo $form->textField($model,'tki_buruh_perkebunan_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_buruh_perkebunan_tahun'); ?>
		<?php echo $form->textField($model,'tki_buruh_perkebunan_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_buruh_pabrik_jumlah'); ?>
		<?php echo $form->textField($model,'tki_buruh_pabrik_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tki_buruh_pabrik_tahun'); ?>
		<?php echo $form->textField($model,'tki_buruh_pabrik_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_pemerintah_jps'); ?>
		<?php echo $form->textField($model,'beasiswa_pemerintah_jps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_pemerintah_non_jps'); ?>
		<?php echo $form->textField($model,'beasiswa_pemerintah_non_jps',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_gn_ota'); ?>
		<?php echo $form->textField($model,'beasiswa_gn_ota',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_swasta'); ?>
		<?php echo $form->textField($model,'beasiswa_swasta',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_sekolah'); ?>
		<?php echo $form->textField($model,'beasiswa_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_perorangan'); ?>
		<?php echo $form->textField($model,'beasiswa_perorangan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_lainnya'); ?>
		<?php echo $form->textField($model,'beasiswa_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_sd_jumlah'); ?>
		<?php echo $form->textField($model,'beasiswa_sd_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_sd_tahun'); ?>
		<?php echo $form->textField($model,'beasiswa_sd_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_smp_jumlah'); ?>
		<?php echo $form->textField($model,'beasiswa_smp_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_smp_tahun'); ?>
		<?php echo $form->textField($model,'beasiswa_smp_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_sma_jumlah'); ?>
		<?php echo $form->textField($model,'beasiswa_sma_jumlah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beasiswa_sma_tahun'); ?>
		<?php echo $form->textField($model,'beasiswa_sma_tahun',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->