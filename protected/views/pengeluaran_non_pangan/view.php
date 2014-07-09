<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */

$this->breadcrumbs=array(
	'Pengeluaran Non Makanan'=>array('index'),
	$model->id_pengeluaran_non_makanan,
);


$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pengeluaran Non Makanan', 'url'=>array('index', 'id' => $model->id_rt)),
);
?>

<h3>View PengeluaranNonMakanan #<?php echo $model->id_pengeluaran_non_makanan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengeluaran_non_makanan',
		'id_rt',
		'sewa_rumah',
		'sewa_rumah_setahun',
		'pemeliharaan_rumah',
		'pemeliharaan_rumah_setahun',
		'rekening_rt',
		'rekening_rt_setahun',
		'rekening_elektrik',
		'rekening_elektrik_setahun',
		'sabun_kosmetik',
		'sabun_kosmetik_setahun',
		'biaya_kesehatan',
		'biaya_kesehatan_setahun',
		'biaya_pendidikan',
		'biaya_pendidikan_setahun',
		'jasa_lainnya',
		'jasa_lainnya_setahun',
		'pakaian',
		'pakaian_setahun',
		'barang_tahan_lama',
		'barang_tahan_lama_setahun',
		'pbb',
		'pbb_setahun',
		'retribusi',
		'retribusi_setahun',
		'askes',
		'askes_setahun',
		'pajak_lainnya',
		'pajak_lainnya_setahun',
		'keperluan_pesta',
		'keperluan_pesta_setahun',
		'sumber_penghasilan_utama_rt',
		'kode_status_pekerjaan',
	),
)); ?>

</div>
</div>
