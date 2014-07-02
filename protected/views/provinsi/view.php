<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsi'=>array('index'),
	$model->id_provinsi,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Provinsi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Provinsi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Provinsi', 'url'=>array('update', 'id'=>$model->id_provinsi)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Provinsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_provinsi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Provinsi', 'url'=>array('admin')),
);
?>

<h3>View Provinsi #<?php echo $model->id_provinsi; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_provinsi',
		'provinsi',
	),
)); ?>

</div>
</div>
