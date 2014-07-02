<?php
/* @var $this Desa_kelurahanController */
/* @var $data DesaKelurahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_desa_kelurahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_desa_kelurahan), array('view', 'id'=>$data->id_desa_kelurahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_provinsi')); ?>:</b>
	<?php echo CHtml::encode($data->id_provinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kabupaten')); ?>:</b>
	<?php echo CHtml::encode($data->id_kabupaten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desa_kelurahan')); ?>:</b>
	<?php echo CHtml::encode($data->desa_kelurahan); ?>
	<br />


</div>