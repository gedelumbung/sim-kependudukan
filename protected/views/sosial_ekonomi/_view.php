<?php
/* @var $this Sosial_ekonomiController */
/* @var $data SosialEkonomi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sosial_ekonomi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sosial_ekonomi), array('view', 'id'=>$data->id_sosial_ekonomi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_miskin')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_miskin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kartu_kesehatan')); ?>:</b>
	<?php echo CHtml::encode($data->kartu_kesehatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memperoleh_kartu_kesehatan')); ?>:</b>
	<?php echo CHtml::encode($data->memperoleh_kartu_kesehatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_jalan_inap_kartu_kesehatan_3_bulan')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_jalan_inap_kartu_kesehatan_3_bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_rawat_jalan_inap')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_rawat_jalan_inap); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('melahirkan_kehamilan_kartu_kesehatan_3_bulan')); ?>:</b>
	<?php echo CHtml::encode($data->melahirkan_kehamilan_kartu_kesehatan_3_bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_melahirkan_kehamilan')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_melahirkan_kehamilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keperluan_kb_kartu_kesehatan_3_bulan')); ?>:</b>
	<?php echo CHtml::encode($data->keperluan_kb_kartu_kesehatan_3_bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_keperluan_kb')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_keperluan_kb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beras_murah')); ?>:</b>
	<?php echo CHtml::encode($data->beras_murah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_beras_murah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_beras_murah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_beras_murah')); ?>:</b>
	<?php echo CHtml::encode($data->harga_beras_murah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kredit_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->kredit_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_kredit_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_kredit_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bunga_kredit_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->bunga_kredit_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_kredit_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_kredit_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('art_sebagai_tki')); ?>:</b>
	<?php echo CHtml::encode($data->art_sebagai_tki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_perawat_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_perawat_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_perawat_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_perawat_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_pembantu_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_pembantu_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_pembantu_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_pembantu_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_supir_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_supir_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_supir_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_supir_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_tukang_bangunan_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_tukang_bangunan_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_tukang_bangunan_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_tukang_bangunan_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_buruh_perkebunan_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_buruh_perkebunan_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_buruh_perkebunan_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_buruh_perkebunan_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_buruh_pabrik_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->tki_buruh_pabrik_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tki_buruh_pabrik_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tki_buruh_pabrik_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_pemerintah_jps')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_pemerintah_jps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_pemerintah_non_jps')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_pemerintah_non_jps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_gn_ota')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_gn_ota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_swasta')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_swasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_perorangan')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_perorangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_sd_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_sd_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_sd_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_sd_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_smp_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_smp_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_smp_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_smp_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_sma_jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_sma_jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beasiswa_sma_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->beasiswa_sma_tahun); ?>
	<br />

	*/ ?>

</div>