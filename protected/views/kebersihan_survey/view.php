<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */

$this->breadcrumbs=array(
	'Kebersihan Survey'=>array('index'),
	$model->id_kebersihan_survey,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kebersihan Survey', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Kebersihan Survey #<?php echo $model->id_kebersihan_survey; ?></h3>

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
		'tps',
		'bentuk_tps',
		'pemilihan_sampah',
		'tps_alternatif',
		'layanan_tps_keliling',
		'intensitas_pengangkutan_sampah',
		'alasan_tidak_berlangganan',
		'keanggotaan_urusan_sampah',
	),
)); ?>

</div>
</div>
