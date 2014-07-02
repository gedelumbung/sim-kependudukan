<?php
/* @var $this ArtController */
/* @var $data Art */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_art')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_art), array('view', 'id'=>$data->id_art)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_art')); ?>:</b>
	<?php echo CHtml::encode($data->nama_art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hubungan_krt')); ?>:</b>
	<?php echo CHtml::encode($data->hubungan_krt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jk')); ?>:</b>
	<?php echo CHtml::encode($data->jk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmp_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tmp_lahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kawin')); ?>:</b>
	<?php echo CHtml::encode($data->status_kawin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gol_darah')); ?>:</b>
	<?php echo CHtml::encode($data->gol_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kartu_kk')); ?>:</b>
	<?php echo CHtml::encode($data->kartu_kk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kartu_ak')); ?>:</b>
	<?php echo CHtml::encode($data->kartu_ak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buku_nikah')); ?>:</b>
	<?php echo CHtml::encode($data->buku_nikah); ?>
	<br />

	*/ ?>

</div>