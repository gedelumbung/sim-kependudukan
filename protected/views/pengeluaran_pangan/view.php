<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */

$this->breadcrumbs=array(
	'Pengeluaran Pangan'=>array('index'),
	$model->id_pengeluaran_rt,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pengeluaran Pangan', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View PengeluaranPangan #<?php echo $model->id_pengeluaran_rt; ?></h3>

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
		array(
				'label' => 'Beras x 12 bulan',
				'value' => number_format($model['beras'],2,",",".")
			),
		array(
				'label' => 'Padi lainnya x 12 bulan',
				'value' => number_format($model['padi_lainnya'],2,",",".")
			),
		array(
				'label' => 'Umbi-umbian x 12 bulan',
				'value' => number_format($model['umbi_umbian'],2,",",".")
			),
		array(
				'label' => 'Ikan Segar x 12 bulan',
				'value' => number_format($model['ikan_segar'],2,",",".")
			),
		array(
				'label' => 'Ikan diawetkan x 12 bulan',
				'value' => number_format($model['ikan_diawetkan'],2,",",".")
			),
		array(
				'label' => 'Daging x 12 bulan',
				'value' => number_format($model['daging'],2,",",".")
			),
		array(
				'label' => 'Telur x 12 bulan',
				'value' => number_format($model['telur'],2,",",".")
			),
		array(
				'label' => 'Susu x 12 bulan',
				'value' => number_format($model['susu'],2,",",".")
			),

		array(
				'label' => 'Sayur x 12 bulan',
				'value' => number_format($model['sayur'],2,",",".")
			),
		array(
				'label' => 'Buah x 12 bulan',
				'value' => number_format($model['buah'],2,",",".")
			),
		array(
				'label' => 'Minyak Lemak x 12 bulan',
				'value' => number_format($model['minyak_lemak'],2,",",".")
			),
		array(
				'label' => 'Bahan minuman x 12 bulan',
				'value' => number_format($model['bahan_minuman'],2,",",".")
			),
		array(
				'label' => 'Bumbu-bumbuan x 12 bulan',
				'value' => number_format($model['bumbu_bumbuan'],2,",",".")
			),
		array(
				'label' => 'Mie x 12 bulan',
				'value' => number_format($model['mie'],2,",",".")
			),
		array(
				'label' => 'Konsumsi lainnya x 12 bulan',
				'value' => number_format($model['konsumsi_lainnya'],2,",",".")
			),
		array(
				'label' => 'Makanan jadi x 12 bulan',
				'value' => number_format($model['makanan_jadi'],2,",",".")
			),

		array(
				'label' => 'Minuman non alkohol x 12 bulan',
				'value' => number_format($model['minuman_non_alkohol'],2,",",".")
			),
		array(
				'label' => 'Minuman beralkohol x 12 bulan',
				'value' => number_format($model['minuman_alkohol'],2,",",".")
			),
		array(
				'label' => 'Rokok x 12 bulan',
				'value' => number_format($model['rokok'],2,",",".")
			),
		array(
				'label' => 'Tembakau lainnya x 12 bulan',
				'value' => number_format($model['tembakau_lainnya'],2,",",".")
			),
		array(
				'label' => 'Total',
				'value' => number_format(($model['beras']+$model['padi_lainnya']+$model['umbi_umbian']+$model['ikan_segar']+$model['ikan_diawetkan']+$model['daging']+$model['telur']+$model['susu']+$model['sayur']+$model['buah']+$model['minyak_lemak']+$model['bahan_minuman']+$model['bumbu_bumbuan']+$model['mie']+$model['konsumsi_lainnya']+$model['makanan_jadi']+$model['minuman_non_alkohol']+$model['minuman_alkohol']+$model['rokok']+$model['tembakau_lainnya']),2,",",".")
			),
	),
)); ?>

</div>
</div>
