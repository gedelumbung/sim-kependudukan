<?php
/* @var $this Perumahan_surveyController */
/* @var $data PerumahanSurvey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perumahan_survey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perumahan_survey), array('view', 'id'=>$data->id_perumahan_survey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('konstruksi_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->konstruksi_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepemilikan_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->kepemilikan_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fungsi_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->fungsi_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_pembuatan_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_pembuatan_rumah); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_lantai')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_lantai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_lantai_1')); ?>:</b>
	<?php echo CHtml::encode($data->luas_lantai_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_lantai_2')); ?>:</b>
	<?php echo CHtml::encode($data->luas_lantai_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_lantai_3')); ?>:</b>
	<?php echo CHtml::encode($data->luas_lantai_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_pekarangan')); ?>:</b>
	<?php echo CHtml::encode($data->luas_pekarangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bagian_terluas_atap')); ?>:</b>
	<?php echo CHtml::encode($data->bagian_terluas_atap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_atap_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi_atap_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bagian_terluas_dinding')); ?>:</b>
	<?php echo CHtml::encode($data->bagian_terluas_dinding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_dinding_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi_dinding_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bagian_terluas_lantai')); ?>:</b>
	<?php echo CHtml::encode($data->bagian_terluas_lantai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi_lantai_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi_lantai_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_kepemilikan_rumah_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_kepemilikan_rumah_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_rumah_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_rumah_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepemilikan_imb')); ?>:</b>
	<?php echo CHtml::encode($data->kepemilikan_imb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penertiban_imb')); ?>:</b>
	<?php echo CHtml::encode($data->penertiban_imb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepemilikan_surat_tanah')); ?>:</b>
	<?php echo CHtml::encode($data->kepemilikan_surat_tanah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak_sempadan_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->jarak_sempadan_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak_sempadan_sungai')); ?>:</b>
	<?php echo CHtml::encode($data->jarak_sempadan_sungai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak_sempadan_pantai')); ?>:</b>
	<?php echo CHtml::encode($data->jarak_sempadan_pantai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak_sempadan_irigasi')); ?>:</b>
	<?php echo CHtml::encode($data->jarak_sempadan_irigasi); ?>
	<br />

	*/ ?>

</div>