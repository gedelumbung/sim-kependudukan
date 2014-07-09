<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */

$this->breadcrumbs=array(
	'Pengeluaran Non Makanan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data PengeluaranNonMakanan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create PengeluaranNonMakanan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pengeluaran-non-makanan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Pengeluaran Non Makanan</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pengeluaran-non-makanan-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_pengeluaran_non_makanan',
		'id_rt',
		'sewa_rumah',
		'pemeliharaan_rumah',
		'rekening_rt',
		'rekening_elektrik',
		/*
		'pakaian',
		'barang_tahan_lama',
		'pbb',
		'retribusi',
		'askes',
		'pajak_lainnya',
		'keperluan_pesta',
		'sumber_penghasilan_utama_rt',
		'kode_status_pekerjaan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
