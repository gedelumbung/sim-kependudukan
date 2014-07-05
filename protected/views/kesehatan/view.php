<?php
/* @var $this KesehatanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kesehatan Art', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kesehatan Art', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update Kesehatan Art', 'url'=>array('update', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Kesehatan Art', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art_perorangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kesehatan Art', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>View Art Perorangan #<?php echo $model->id_art_perorangan; ?> - Keterangan Kesehatan</h3>

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
		'kehadiran_wawancara',
		'keluhan_panas',
		'keluhan_batuk',
		'keluhan_pilek',
		'keluhan_asma',
		'keluhan_diare',
		'keluhan_sakit_kepala',
		'keluhan_sakit_gigi',
		'keluhan_lainnya',
		'implikasi_keluhan',
		'lama_implikasi',
		'masih_implikasi',
		'pengobatan_sendiri',
		'jenis_pengobatan_sendiri',
		'pengobatan_jalan',
		'berobat_jalan_rs_pemerintah',
		'berobat_jalan_rs_swasta',
		'berobat_jalan_poliklinik',
		'berobat_jalan_puskesmas',
		'berobat_jalan_nakes',
		'berobat_jalan_batra',
		'berobat_jalan_dukun',
		'berobat_jalan_lainnya',
		'rawat_inap',
		'rawat_inap_rs_pemerintah',
		'rawat_inap_rs_swasta',
		'rawat_inap_puskesmas',
		'rawat_inap_nakes',
		'rawat_inap_batra',
		'rawat_inap_lainnya',
		'jamkesmas',
		'jamkesda',
		'jampersal',
		'bpjs',
	),
)); ?>

</div>
</div>
