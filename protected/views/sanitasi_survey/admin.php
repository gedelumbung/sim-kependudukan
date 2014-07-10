<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */

$this->breadcrumbs=array(
	'Sanitasi Survey'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data SanitasiSurvey', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create SanitasiSurvey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sanitasi-survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Sanitasi Survey</h3>

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
	'id'=>'sanitasi-survey-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_sanitasi_penerangan_survey',
		'id_rt',
		'kepemilikan_jamban',
		'jumlah_kepemilikan_jamban',
		'jenis_jamban',
		'jamban_alternatif',
		/*
		'sumber_penerangan',
		'sumber_air_bersih',
		'kualitas_air_bersih',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
