<?php
/* @var $this Rumah_tanggaController */
/* @var $data RumahTangga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rt), array('view', 'id'=>$data->id_rt)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_desa_kelurahan')); ?>:</b>
	<?php echo CHtml::encode($data->id_desa_kelurahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_krt')); ?>:</b>
	<?php echo CHtml::encode($data->nama_krt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suku_krt')); ?>:</b>
	<?php echo CHtml::encode($data->suku_krt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_art')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_anak')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_anak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_art_meninggal')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_art_meninggal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	*/ ?>

</div>