<?php
/* @var $this PerumahanController */
/* @var $data Perumahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perumahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perumahan), array('view', 'id'=>$data->id_perumahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_penguasaan_bangunan')); ?>:</b>
	<?php echo CHtml::encode($data->status_penguasaan_bangunan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_lantai')); ?>:</b>
	<?php echo CHtml::encode($data->luas_lantai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_air_minum')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_air_minum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak_sumber_air_sepiteng')); ?>:</b>
	<?php echo CHtml::encode($data->jarak_sumber_air_sepiteng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penggunaan_tempat_buang_air')); ?>:</b>
	<?php echo CHtml::encode($data->penggunaan_tempat_buang_air); ?>
	<br />


</div>