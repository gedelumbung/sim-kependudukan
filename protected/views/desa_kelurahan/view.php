<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */

$this->breadcrumbs=array(
	'Desa Kelurahan'=>array('index'),
	$model->id_desa_kelurahan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List DesaKelurahan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create DesaKelurahan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update DesaKelurahan', 'url'=>array('update', 'id'=>$model->id_desa_kelurahan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete DesaKelurahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_desa_kelurahan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage DesaKelurahan', 'url'=>array('admin')),
);
?>

<h3>View DesaKelurahan #<?php echo $model->id_desa_kelurahan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_desa_kelurahan',
		'Provinsi.provinsi',
		'Kabupaten.kabupaten',
		'Kecamatan.kecamatan',
		'desa_kelurahan',
	),
)); ?>

</div>
</div>
