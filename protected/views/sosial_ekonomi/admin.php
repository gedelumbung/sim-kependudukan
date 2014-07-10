<?php
/* @var $this Sosial_ekonomiController */
/* @var $model SosialEkonomi */

$this->breadcrumbs=array(
	'Sosial Ekonomi'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data SosialEkonomi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create SosialEkonomi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sosial-ekonomi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Sosial Ekonomi</h3>

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
	'id'=>'sosial-ekonomi-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_sosial_ekonomi',
		'id_rt',
		'kategori_miskin',
		'kartu_kesehatan',
		'memperoleh_kartu_kesehatan',
		'rawat_jalan_inap_kartu_kesehatan_3_bulan',
		/*
		'biaya_rawat_jalan_inap',
		'melahirkan_kehamilan_kartu_kesehatan_3_bulan',
		'biaya_melahirkan_kehamilan',
		'keperluan_kb_kartu_kesehatan_3_bulan',
		'biaya_keperluan_kb',
		'beras_murah',
		'jumlah_beras_murah',
		'harga_beras_murah',
		'kredit_usaha',
		'jumlah_kredit_usaha',
		'bunga_kredit_usaha',
		'sumber_kredit_usaha',
		'art_sebagai_tki',
		'tki_perawat_jumlah',
		'tki_perawat_tahun',
		'tki_pembantu_jumlah',
		'tki_pembantu_tahun',
		'tki_supir_jumlah',
		'tki_supir_tahun',
		'tki_tukang_bangunan_jumlah',
		'tki_tukang_bangunan_tahun',
		'tki_buruh_perkebunan_jumlah',
		'tki_buruh_perkebunan_tahun',
		'tki_buruh_pabrik_jumlah',
		'tki_buruh_pabrik_tahun',
		'beasiswa_pemerintah_jps',
		'beasiswa_pemerintah_non_jps',
		'beasiswa_gn_ota',
		'beasiswa_swasta',
		'beasiswa_sekolah',
		'beasiswa_perorangan',
		'beasiswa_lainnya',
		'beasiswa_sd_jumlah',
		'beasiswa_sd_tahun',
		'beasiswa_smp_jumlah',
		'beasiswa_smp_tahun',
		'beasiswa_sma_jumlah',
		'beasiswa_sma_tahun',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
