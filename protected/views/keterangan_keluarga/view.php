<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index','id'=>$model->id_rt),
	$model->id_rt,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> Manage KeteranganKeluarga', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Keterangan Keluarga #<?php echo $model->id_keterangan_keluarga; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_keterangan_keluarga',
		'id_rt',
		'nama_kepala_rt',
		'jenis_kelamin_rt',
		'jumlah_keluarga',
		'jumlah_anggota_keluarga',
		'jenis_lantai_bangunan',
		'jenis_dinding_bangunan',
		'fasilitas_buang_air',
		'sumber_air',
		'sumber_penerangan',
		'jenis_bahan_bakar_memasak',
		'frekuensi_membeli_daging_seminggu',
		'frekuensi_makan_perhari',
		'kuantitas_membeli_pakaian_pertahun',
		'kemampuan_berobat',
		'pekerjaan_kepala_rt',
		'pendidikan_kepala_rt',
		'tabungan',
		'emas',
		'televisi',
		'ternak',
		'sepeda_motor',
		'art_balita',
		'art_7_18',
		'art_7_18_sd',
		'art_7_18_smp',
		'art_7_18_sma',
		'art_7_18_tidak_sekolah',
		'art_10_49',
		'kredit_usaha',
	),
)); ?>

</div>
</div>
