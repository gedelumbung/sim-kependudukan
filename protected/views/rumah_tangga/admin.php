<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */

$this->breadcrumbs=array(
	'Rumah Tangga'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data RumahTangga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create RumahTangga', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rumah-tangga-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Rumah Tangga</h3>

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
	'id'=>'rumah-tangga-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_rt',
		'DesaKelurahan.Provinsi.provinsi',
		'DesaKelurahan.Kabupaten.kabupaten',
		'DesaKelurahan.Kecamatan.kecamatan',
		'DesaKelurahan.desa_kelurahan',
		'nama_krt',
		'jumlah_art',
		/*
		'jumlah_art_meninggal',
		'tahun',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
