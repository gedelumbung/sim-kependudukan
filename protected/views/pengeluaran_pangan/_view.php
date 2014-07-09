<?php
/* @var $this Pengeluaran_panganController */
/* @var $data PengeluaranPangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengeluaran_rt')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengeluaran_rt), array('view', 'id'=>$data->id_pengeluaran_rt)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beras')); ?>:</b>
	<?php echo CHtml::encode($data->beras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padi_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->padi_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umbi_umbian')); ?>:</b>
	<?php echo CHtml::encode($data->umbi_umbian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ikan_segar')); ?>:</b>
	<?php echo CHtml::encode($data->ikan_segar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ikan_diawetkan')); ?>:</b>
	<?php echo CHtml::encode($data->ikan_diawetkan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('daging')); ?>:</b>
	<?php echo CHtml::encode($data->daging); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telur')); ?>:</b>
	<?php echo CHtml::encode($data->telur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('susu')); ?>:</b>
	<?php echo CHtml::encode($data->susu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sayur')); ?>:</b>
	<?php echo CHtml::encode($data->sayur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kacang')); ?>:</b>
	<?php echo CHtml::encode($data->kacang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buah')); ?>:</b>
	<?php echo CHtml::encode($data->buah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minyak_lemak')); ?>:</b>
	<?php echo CHtml::encode($data->minyak_lemak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bahan_minuman')); ?>:</b>
	<?php echo CHtml::encode($data->bahan_minuman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bumbu_bumbuan')); ?>:</b>
	<?php echo CHtml::encode($data->bumbu_bumbuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mie')); ?>:</b>
	<?php echo CHtml::encode($data->mie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('konsumsi_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->konsumsi_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('makanan_jadi')); ?>:</b>
	<?php echo CHtml::encode($data->makanan_jadi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minuman_non_alkohol')); ?>:</b>
	<?php echo CHtml::encode($data->minuman_non_alkohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minuman_alkohol')); ?>:</b>
	<?php echo CHtml::encode($data->minuman_alkohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rokok')); ?>:</b>
	<?php echo CHtml::encode($data->rokok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tembakau_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->tembakau_lainnya); ?>
	<br />

	*/ ?>

</div>