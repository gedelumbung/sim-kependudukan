<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */

$this->breadcrumbs=array(
	'Informasi Tambahan Survey'=>array('index'),
	$model->id_informasi_tambahan_survey,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Informasi Tambahan Survey', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Informasi Tambahan Survey #<?php echo $model->id_informasi_tambahan_survey; ?></h3>

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
		'drainase',
		'bentuk_drainase',
		'fungsi_drainase',
		'kualitas_drainase',
		'klasifikasi_drainase',
		'penanganan_limbah_rt',
		'status_jalan_rumah',
		'bentuk_fisik_permukaan_jalan',
		'kualitas_jalan',
		'fungsi_jalan',
		'nama_jalan',
	),
)); ?>

</div>
</div>
