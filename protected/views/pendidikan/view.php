<?php
/* @var $this PendidikanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update ArtPerorangan', 'url'=>array('update', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete ArtPerorangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art_perorangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>View Art Perorangan #<?php echo $model->id_art_perorangan; ?> - Keterangan Pendidikan</h3>

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
		'no_urut_ibu_kandung',
		'partisipasi_sekolah',
		'berhenti_sekolah',
		'pendidikan_tertinggi',
		'penyelenggara_pendidikan',
		'tingkat_tertinggi',
		'ijazah_tertinggi',
		'membaca_menulis',
	),
)); ?>

</div>
</div>
