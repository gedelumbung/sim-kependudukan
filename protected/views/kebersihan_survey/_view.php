<?php
/* @var $this Kebersihan_surveyController */
/* @var $data KebersihanSurvey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kebersihan_survey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kebersihan_survey), array('view', 'id'=>$data->id_kebersihan_survey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tps')); ?>:</b>
	<?php echo CHtml::encode($data->tps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bentuk_tps')); ?>:</b>
	<?php echo CHtml::encode($data->bentuk_tps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemilihan_sampah')); ?>:</b>
	<?php echo CHtml::encode($data->pemilihan_sampah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tps_alternatif')); ?>:</b>
	<?php echo CHtml::encode($data->tps_alternatif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('layanan_tps_keliling')); ?>:</b>
	<?php echo CHtml::encode($data->layanan_tps_keliling); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('intensitas_pengangkutan_sampah')); ?>:</b>
	<?php echo CHtml::encode($data->intensitas_pengangkutan_sampah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alasan_tidak_berlangganan')); ?>:</b>
	<?php echo CHtml::encode($data->alasan_tidak_berlangganan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keanggotaan_urusan_sampah')); ?>:</b>
	<?php echo CHtml::encode($data->keanggotaan_urusan_sampah); ?>
	<br />

	*/ ?>

</div>