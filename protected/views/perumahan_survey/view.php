<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */

$this->breadcrumbs=array(
	'Perumahan Survey'=>array('index'),
	$model->id_perumahan_survey,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Perumahan - Survey', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Perumahan - Survey #<?php echo $model->id_perumahan_survey; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RumahTangga.nama_krt',
		'jenis_rumah',
		'konstruksi_rumah',
		'kepemilikan_rumah',
		'fungsi_rumah',
		'tahun_pembuatan_rumah',
		'jumlah_lantai',
		'luas_lantai_1',
		'luas_lantai_2',
		'luas_lantai_3',
		'luas_pekarangan',
		'bagian_terluas_atap',
		'kondisi_atap_rumah',
		'bagian_terluas_dinding',
		'kondisi_dinding_rumah',
		'bagian_terluas_lantai',
		'kondisi_lantai_rumah',
		'jumlah_kepemilikan_rumah_lainnya',
		'alamat_rumah_lainnya',
		'kepemilikan_imb',
		'penertiban_imb',
		'kepemilikan_surat_tanah',
		'jarak_sempadan_jalan',
		'jarak_sempadan_sungai',
		'jarak_sempadan_pantai',
		'jarak_sempadan_irigasi',
	),
)); ?>

</div>
</div>
