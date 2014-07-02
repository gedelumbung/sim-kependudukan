<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	$model->id_kecamatan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kecamatan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kecamatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Kecamatan', 'url'=>array('update', 'id'=>$model->id_kecamatan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Kecamatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kecamatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h3>View Kecamatan #<?php echo $model->id_kecamatan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kecamatan',
		'Provinsi.provinsi',
		'Kabupaten.kabupaten',
		'kecamatan',
	),
)); ?>

</div>
</div>
