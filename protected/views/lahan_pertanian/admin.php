<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */

$this->breadcrumbs=array(
	'Lahan Pertanian'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data LahanPertanian', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create LahanPertanian', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lahan-pertanian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Lahan Pertanian</h3>

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
	'id'=>'lahan-pertanian-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_lahan_pertanian',
		'id_rt',
		'lahan_pertanian',
		'milik_sendiri_pencacahan_luas_sawah',
		'milik_sendiri_pencacahan_lahan_kering',
		'milik_sendiri_setahun_lalu_luas_sawah',
		/*
		'milik_sendiri_setahun_lalu_lahan_kering',
		'pihak_lain_pencacahan_luas_sawah',
		'pihak_lain_pencacahan_lahan_kering',
		'pihak_lain_setahun_lalu_luas_sawah',
		'pihak_lain_setahun_lalu_lahan_kering',
		'sendiri_pihak_lain_pencacahan_luas_sawah',
		'sendiri_pihak_lain_pencacahan_lahan_kering',
		'sendiri_pihak_lain_setahun_lalu_luas_sawah',
		'sendiri_pihak_lain_setahun_lalu_lahan_kering',
		'dikuasai_pencacahan_luas_swah',
		'dikuasai_pencacahan_lahan_kering',
		'dikuasai_setahun_lalu_luas_swah',
		'dikuasai_setahun_lalu_lahan_kering',
		'pertanian_pencacahan_luas_sawah',
		'pertanian_pencacahan_lahan_kering',
		'pertanian_setahun_lalu_luas_sawah',
		'pertanian_setahun_lalu_lahan_kering',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
