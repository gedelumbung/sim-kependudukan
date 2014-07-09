<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $data PengeluaranNonMakanan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengeluaran_non_makanan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengeluaran_non_makanan), array('view', 'id'=>$data->id_pengeluaran_non_makanan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sewa_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->sewa_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemeliharaan_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->pemeliharaan_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rekening_rt')); ?>:</b>
	<?php echo CHtml::encode($data->rekening_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rekening_elektrik')); ?>:</b>
	<?php echo CHtml::encode($data->rekening_elektrik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pakaian')); ?>:</b>
	<?php echo CHtml::encode($data->pakaian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('barang_tahan_lama')); ?>:</b>
	<?php echo CHtml::encode($data->barang_tahan_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pbb')); ?>:</b>
	<?php echo CHtml::encode($data->pbb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retribusi')); ?>:</b>
	<?php echo CHtml::encode($data->retribusi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('askes')); ?>:</b>
	<?php echo CHtml::encode($data->askes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pajak_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->pajak_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keperluan_pesta')); ?>:</b>
	<?php echo CHtml::encode($data->keperluan_pesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_penghasilan_utama_rt')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_penghasilan_utama_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_status_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->kode_status_pekerjaan); ?>
	<br />

	*/ ?>

</div>