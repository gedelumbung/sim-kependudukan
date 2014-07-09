<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */

$this->breadcrumbs=array(
	'Pengeluaran Pangan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data PengeluaranPangan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create PengeluaranPangan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pengeluaran-pangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Pengeluaran Pangan</h3>

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
	'id'=>'pengeluaran-pangan-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_pengeluaran_rt',
		'id_rt',
		'beras',
		'padi_lainnya',
		'umbi_umbian',
		'ikan_segar',
		/*
		'ikan_diawetkan',
		'daging',
		'telur',
		'susu',
		'sayur',
		'kacang',
		'buah',
		'minyak_lemak',
		'bahan_minuman',
		'bumbu_bumbuan',
		'mie',
		'konsumsi_lainnya',
		'makanan_jadi',
		'minuman_non_alkohol',
		'minuman_alkohol',
		'rokok',
		'tembakau_lainnya',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
