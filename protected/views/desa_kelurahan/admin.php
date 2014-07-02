<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */

$this->breadcrumbs=array(
	'Desa Kelurahan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data DesaKelurahan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create DesaKelurahan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#desa-kelurahan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Desa Kelurahan</h3>

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
	'id'=>'desa-kelurahan-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_desa_kelurahan',
		'Provinsi.provinsi',
		'Kabupaten.kabupaten',
		'Kecamatan.kecamatan',
		'desa_kelurahan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
