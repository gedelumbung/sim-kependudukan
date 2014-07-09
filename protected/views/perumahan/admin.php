<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Perumahan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Perumahan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perumahan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Perumahan</h3>

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
	'id'=>'perumahan-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_perumahan',
		'id_rt',
		'status_penguasaan_bangunan',
		'luas_lantai',
		'sumber_air_minum',
		'jarak_sumber_air_sepiteng',
		/*
		'penggunaan_tempat_buang_air',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
