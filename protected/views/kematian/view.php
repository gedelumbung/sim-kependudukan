<?php
/* @var $this KematianController */
/* @var $model Kematian */

$this->breadcrumbs=array(
	'Kematian'=>array('index'),
	$model->id_kematian,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kematian', 'url'=>array('kematian/index/'.$id)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kematian', 'url'=>array('kematian/create/'.$id)),
	array('label'=>'<i class="icon icon-share"></i> Update Kematian', 'url'=>array('update', 'id'=>$model->id_kematian)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Kematian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kematian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kematian', 'url'=>array('kematian/admin/'.$id)),
);
?>

<h3>View Kematian #<?php echo $model->id_kematian; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kematian',
		'RumahTangga.nama_krt',
		'nama',
		'tahun',
		'jenis_kelamin',
		'umur',
		'sebab_kematian',
		'masa_kehamilan',
		'persalinan',
		'nifas',
	),
)); ?>

</div>
</div>
