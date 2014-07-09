<?php
/* @var $this KetenagakerjaanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Ketenagakerjaan', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Ketenagakerjaan', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update Ketenagakerjaan', 'url'=>array('update', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Ketenagakerjaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art_perorangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Ketenagakerjaan', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>View Art Perorangan #<?php echo $model->id_art_perorangan; ?> - Ketenagakerjaan</h3>

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
		'bekerja',
		'sekolah',
		'mengurus_rt',
		'lainnya',
		'kegiatan_terbanyak',
		'tidak_bekerja_sementara',
		'mencari_pekerjaan',
		'membuat_usaha',
		'alasan_tidak_bekerja',
		'jika_ada_tawaran',
		'hari_kerja',
		'jumlah_jam_kerja_seminggu',
		'lapangan_usaha',
		'jenis_pekerjaan',
		'jabatan_pekerjaan',
		'gaji',
	),
)); ?>

</div>
</div>
