<?php
/* @var $this Sanitasi_surveyController */
/* @var $data SanitasiSurvey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sanitasi_penerangan_survey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sanitasi_penerangan_survey), array('view', 'id'=>$data->id_sanitasi_penerangan_survey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rt')); ?>:</b>
	<?php echo CHtml::encode($data->id_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepemilikan_jamban')); ?>:</b>
	<?php echo CHtml::encode($data->kepemilikan_jamban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_kepemilikan_jamban')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_kepemilikan_jamban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_jamban')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_jamban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jamban_alternatif')); ?>:</b>
	<?php echo CHtml::encode($data->jamban_alternatif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_penerangan')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_penerangan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_air_bersih')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_air_bersih); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kualitas_air_bersih')); ?>:</b>
	<?php echo CHtml::encode($data->kualitas_air_bersih); ?>
	<br />

	*/ ?>

</div>