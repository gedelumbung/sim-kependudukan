<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */

$this->breadcrumbs=array(
	'Perumahan Survey'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data PerumahanSurvey', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create PerumahanSurvey', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perumahan-survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Perumahan Survey</h3>

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
	'id'=>'perumahan-survey-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_perumahan_survey',
		'id_rt',
		'jenis_rumah',
		'konstruksi_rumah',
		'kepemilikan_rumah',
		'fungsi_rumah',
		/*
		'tahun_pembuatan_rumah',
		'jumlah_lantai',
		'luas_lantai_1',
		'luas_lantai_2',
		'luas_lantai_3',
		'luas_pekarangan',
		'bagian_terluas_atap',
		'kondisi_atap_rumah',
		'bagian_terluas_dinding',
		'kondisi_dinding_rumah',
		'bagian_terluas_lantai',
		'kondisi_lantai_rumah',
		'jumlah_kepemilikan_rumah_lainnya',
		'alamat_rumah_lainnya',
		'kepemilikan_imb',
		'penertiban_imb',
		'kepemilikan_surat_tanah',
		'jarak_sempadan_jalan',
		'jarak_sempadan_sungai',
		'jarak_sempadan_pantai',
		'jarak_sempadan_irigasi',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
