<?php
/* @var $this BalitaController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Balita', 'url'=>array('index', 'id' => $id)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Balita', 'url'=>array('create', 'id' => $id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#art-perorangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Art Perorangan - Kesehatan Balita</h3>
<h5><i class="icon icon-user"></i> Anak Umur 0-59 bulan</h5>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'id'=>$id,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'art-perorangan-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search($id),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_art_perorangan',
		'Art.nama_art',
		'umur_balita',
		'penolong_kelahiran_1',
		'penolong_kelahiran_2',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
