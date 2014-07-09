<?php
/* @var $this KbController */
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

<h3>View Art Perorangan #<?php echo $model->id_art_perorangan; ?> - Keterangan Fertilitas / Keluarga Berencana</h3>

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
		'umur_saat_nikah',
		'jumlah_tahun_nikah',
		'anak_lahir_hidup_laki',
		'anak_lahir_hidup_perempuan',
		'anak_lahir_masih_hidup_laki',
		'anak_lahir_masih_hidup_perempuan',
		'anak_meninggal_laki',
		'anak_meninggal_perempuan',
		'alat_kb',
		'memakai_alat_kb',
		'alat_kb_dipakai',
	),
)); ?>

</div>
</div>
