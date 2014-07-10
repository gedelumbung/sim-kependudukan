<?php
/* @var $this Lahan_pertanianController */
/* @var $data LahanPertanian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lahan_pertanian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lahan_pertanian), array('view', 'id'=>$data->id_lahan_pertanian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lahan_pertanian')); ?>:</b>
	<?php echo CHtml::encode($data->lahan_pertanian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milik_sendiri_pencacahan_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->milik_sendiri_pencacahan_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milik_sendiri_pencacahan_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->milik_sendiri_pencacahan_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milik_sendiri_setahun_lalu_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->milik_sendiri_setahun_lalu_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milik_sendiri_setahun_lalu_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->milik_sendiri_setahun_lalu_lahan_kering); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pihak_lain_pencacahan_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->pihak_lain_pencacahan_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pihak_lain_pencacahan_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->pihak_lain_pencacahan_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pihak_lain_setahun_lalu_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->pihak_lain_setahun_lalu_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pihak_lain_setahun_lalu_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->pihak_lain_setahun_lalu_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sendiri_pihak_lain_pencacahan_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->sendiri_pihak_lain_pencacahan_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sendiri_pihak_lain_pencacahan_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->sendiri_pihak_lain_pencacahan_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sendiri_pihak_lain_setahun_lalu_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->sendiri_pihak_lain_setahun_lalu_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sendiri_pihak_lain_setahun_lalu_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->sendiri_pihak_lain_setahun_lalu_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dikuasai_pencacahan_luas_swah')); ?>:</b>
	<?php echo CHtml::encode($data->dikuasai_pencacahan_luas_swah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dikuasai_pencacahan_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->dikuasai_pencacahan_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dikuasai_setahun_lalu_luas_swah')); ?>:</b>
	<?php echo CHtml::encode($data->dikuasai_setahun_lalu_luas_swah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dikuasai_setahun_lalu_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->dikuasai_setahun_lalu_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanian_pencacahan_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->pertanian_pencacahan_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanian_pencacahan_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->pertanian_pencacahan_lahan_kering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanian_setahun_lalu_luas_sawah')); ?>:</b>
	<?php echo CHtml::encode($data->pertanian_setahun_lalu_luas_sawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanian_setahun_lalu_lahan_kering')); ?>:</b>
	<?php echo CHtml::encode($data->pertanian_setahun_lalu_lahan_kering); ?>
	<br />

	*/ ?>

</div>