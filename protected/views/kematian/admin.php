<?php
/* @var $this KematianController */
/* @var $model Kematian */

$this->breadcrumbs=array(
	'Kematian'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Kematian', 'url'=>array('kematian/index/'.$id)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kematian', 'url'=>array('kematian/create/'.$id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kematian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Kematian</h3>

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
	'id'=>'kematian-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search($id),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_kematian',
		'RumahTangga.nama_krt',
		'nama',
		'tahun',
		'jenis_kelamin',
		'umur',
		/*
		'sebab_kematian',
		'masa_kehamilan',
		'persalinan',
		'nifas',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
