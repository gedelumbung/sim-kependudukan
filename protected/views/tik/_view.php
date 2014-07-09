<?php
/* @var $this TikController */
/* @var $data Tik */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tik), array('view', 'id'=>$data->id_tik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handphone')); ?>:</b>
	<?php echo CHtml::encode($data->handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_no_handphone')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_no_handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komputer')); ?>:</b>
	<?php echo CHtml::encode($data->komputer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet')); ?>:</b>
	<?php echo CHtml::encode($data->internet); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_pengguna_internet')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_pengguna_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet_warnet')); ?>:</b>
	<?php echo CHtml::encode($data->internet_warnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_pengguna_internet_warnet')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_pengguna_internet_warnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet_kantor_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->internet_kantor_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_pengguna_internet_kantor_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_pengguna_internet_kantor_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->internet_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_pengguna_internet_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_pengguna_internet_lainnya); ?>
	<br />

	*/ ?>

</div>