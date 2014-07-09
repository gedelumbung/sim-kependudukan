<?php
/* @var $this TikController */
/* @var $model Tik */

$this->breadcrumbs=array(
	'Tik'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data Tik', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Tik', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tik-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Tik</h3>

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
	'id'=>'tik-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_tik',
		'id_rt',
		'telepon',
		'handphone',
		'jumlah_no_handphone',
		'komputer',
		/*
		'internet',
		'jumlah_pengguna_internet',
		'internet_warnet',
		'jumlah_pengguna_internet_warnet',
		'internet_kantor_sekolah',
		'jumlah_pengguna_internet_kantor_sekolah',
		'internet_lainnya',
		'jumlah_pengguna_internet_lainnya',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
