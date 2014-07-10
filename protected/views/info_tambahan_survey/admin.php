<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */

$this->breadcrumbs=array(
	'Informasi Tambahan Survey'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data InformasiTambahanSurvey', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create InformasiTambahanSurvey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informasi-tambahan-survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Informasi Tambahan Survey</h3>

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
	'id'=>'informasi-tambahan-survey-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_informasi_tambahan_survey',
		'id_rt',
		'drainase',
		'bentuk_drainase',
		'fungsi_drainase',
		'kualitas_drainase',
		/*
		'klasifikasi_drainase',
		'penanganan_limbah_rt',
		'status_jalan_rumah',
		'bentuk_fisik_permukaan_jalan',
		'kualitas_jalan',
		'fungsi_jalan',
		'nama_jalan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
