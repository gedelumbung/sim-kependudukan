<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */

$this->breadcrumbs=array(
	'Sanitasi Survey'=>array('index'),
	$model->id_sanitasi_penerangan_survey,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Sanitasi Survey', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Sanitasi Survey #<?php echo $model->id_sanitasi_penerangan_survey; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RumahTangga.nama_krt',
		'kepemilikan_jamban',
		'jumlah_kepemilikan_jamban',
		'jenis_jamban',
		'jamban_alternatif',
		'sumber_penerangan',
		'sumber_air_bersih',
		'kualitas_air_bersih',
	),
)); ?>

</div>
</div>
