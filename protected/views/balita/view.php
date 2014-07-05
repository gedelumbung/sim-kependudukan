<?php
/* @var $this BalitaController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Balita', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Balita', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update Balita', 'url'=>array('update', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Balita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art_perorangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Balita', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>View Art Perorangan #<?php echo $model->id_art_perorangan; ?> - Kesehatan Balita</h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_art_perorangan',
		'Art.nama_art',
		'umur_balita',
		'penolong_kelahiran_1',
		'penolong_kelahiran_2',
		'imunisasi_bcg',
		'imunisasi_dpt',
		'imunisasi_polio',
		'imunisasi_campak',
		'imunisasi_hepatitis_b',
		'asi',
		'lama_pemberian_asi',
		'diberi_asi_saja',
		'asi_24_jam',
		'pemeriksaan_kehamilan',
		'pemeriksaan_kehamilan_trisemester_1',
		'pemeriksaan_kehamilan_trisemester_2',
		'pemeriksaan_kehamilan_trisemester_3',
	),
)); ?>

</div>
</div>
