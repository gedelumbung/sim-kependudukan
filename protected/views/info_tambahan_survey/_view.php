<?php
/* @var $this Info_tambahan_surveyController */
/* @var $data InformasiTambahanSurvey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informasi_tambahan_survey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informasi_tambahan_survey), array('view', 'id'=>$data->id_informasi_tambahan_survey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drainase')); ?>:</b>
	<?php echo CHtml::encode($data->drainase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bentuk_drainase')); ?>:</b>
	<?php echo CHtml::encode($data->bentuk_drainase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fungsi_drainase')); ?>:</b>
	<?php echo CHtml::encode($data->fungsi_drainase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kualitas_drainase')); ?>:</b>
	<?php echo CHtml::encode($data->kualitas_drainase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('klasifikasi_drainase')); ?>:</b>
	<?php echo CHtml::encode($data->klasifikasi_drainase); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('penanganan_limbah_rt')); ?>:</b>
	<?php echo CHtml::encode($data->penanganan_limbah_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_jalan_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->status_jalan_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bentuk_fisik_permukaan_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->bentuk_fisik_permukaan_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kualitas_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->kualitas_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fungsi_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->fungsi_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jalan); ?>
	<br />

	*/ ?>

</div>