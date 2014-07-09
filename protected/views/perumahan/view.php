<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('index'),
	$model->id_perumahan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> Manage Perumahan', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Perumahan #<?php echo $model->id_perumahan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_perumahan',
		'RumahTangga.nama_krt',
		'status_penguasaan_bangunan',
		'luas_lantai',
		'sumber_air_minum',
		'jarak_sumber_air_sepiteng',
		'penggunaan_tempat_buang_air',
	),
)); ?>

</div>
</div>
