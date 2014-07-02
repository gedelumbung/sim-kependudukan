<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> Data KeteranganKeluarga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create KeteranganKeluarga', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#keterangan-keluarga-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Keterangan Keluarga</h3>

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
	'id'=>'keterangan-keluarga-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
		'id_keterangan_keluarga',
		'id_rt',
		'nama_kepala_rt',
		'jenis_kelamin_rt',
		'jumlah_keluarga',
		'jumlah_anggota_keluarga',
		/*
		'jenis_lantai_bangunan',
		'jenis_dinding_bangunan',
		'fasilitas_buang_air',
		'sumber_air',
		'sumber_penerangan',
		'jenis_bahan_bakar_memasak',
		'frekuensi_membeli_daging_seminggu',
		'frekuensi_makan_perhari',
		'kuantitas_membeli_pakaian_pertahun',
		'kemampuan_berobat',
		'pekerjaan_kepala_rt',
		'pendidikan_kepala_rt',
		'tabungan',
		'emas',
		'televisi',
		'ternak',
		'sepeda_motor',
		'art_balita',
		'art_7_18',
		'art_7_18_sd',
		'art_7_18_smp',
		'art_7_18_sma',
		'art_7_18_tidak_sekolah',
		'art_10_49',
		'kredit_usaha',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
