<?php
/* @var $this KematianController */
/* @var $data Kematian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kematian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kematian), array('view', 'id'=>$data->id_kematian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umur')); ?>:</b>
	<?php echo CHtml::encode($data->umur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sebab_kematian')); ?>:</b>
	<?php echo CHtml::encode($data->sebab_kematian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_kehamilan')); ?>:</b>
	<?php echo CHtml::encode($data->masa_kehamilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persalinan')); ?>:</b>
	<?php echo CHtml::encode($data->persalinan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nifas')); ?>:</b>
	<?php echo CHtml::encode($data->nifas); ?>
	<br />

	*/ ?>

</div>