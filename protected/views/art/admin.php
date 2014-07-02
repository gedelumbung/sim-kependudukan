<?php
/* @var $this ArtController */
/* @var $model Art */

$this->breadcrumbs=array(
	'Art'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Art', 'url'=>array('art/index/'.$id)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Art', 'url'=>array('art/create/'.$id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#art-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Art</h3>

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
	'id'=>'art-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search($id),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_art',
		'RumahTangga.nama_krt',
		'nik',
		'nama_art',
		'hubungan_krt',
		'jk',
		/*
		'tmp_lahir',
		'tgl_lahir',
		'status_kawin',
		'gol_darah',
		'kartu_kk',
		'kartu_ak',
		'buku_nikah',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
