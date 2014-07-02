<?php
/* @var $this KabupatenController */
/* @var $model Kabupaten */

$this->breadcrumbs=array(
	'Kabupaten'=>array('index'),
	$model->id_kabupaten,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kabupaten', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kabupaten', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Kabupaten', 'url'=>array('update', 'id'=>$model->id_kabupaten)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Kabupaten', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kabupaten),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kabupaten', 'url'=>array('admin')),
);
?>

<h3>View Kabupaten #<?php echo $model->id_kabupaten; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kabupaten',
		'Provinsi.provinsi',
		'kabupaten',
	),
)); ?>

</div>
</div>
