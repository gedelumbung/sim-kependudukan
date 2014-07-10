<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */

$this->breadcrumbs=array(
	'Kebersihan Survey'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data KebersihanSurvey', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create KebersihanSurvey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kebersihan-survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Kebersihan Survey</h3>

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
	'id'=>'kebersihan-survey-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_kebersihan_survey',
		'id_rt',
		'tps',
		'bentuk_tps',
		'pemilihan_sampah',
		'tps_alternatif',
		/*
		'layanan_tps_keliling',
		'intensitas_pengangkutan_sampah',
		'alasan_tidak_berlangganan',
		'keanggotaan_urusan_sampah',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
