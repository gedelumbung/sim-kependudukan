<?php
/* @var $this ArtController */
/* @var $model Art */

$this->breadcrumbs=array(
	'Art'=>array('index'),
	$model->id_art,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Art', 'url'=>array('art/index/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Art', 'url'=>array('art/create/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update Art', 'url'=>array('art/update', 'id'=>$model->id_art)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Art', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Art', 'url'=>array('art/admin/'.$model->id_rt)),
);
?>

<h3>View Art #<?php echo $model->id_art; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_art',
		'RumahTangga.nama_krt',
		'nik',
		'nama_art',
		'hubungan_krt',
		'jk',
		'tmp_lahir',
		'tgl_lahir',
		'status_kawin',
		'gol_darah',
		'kartu_kk',
		'kartu_ak',
		'buku_nikah',
	),
)); 
	$gambar = !empty($model->gambar) ? Yii::app()->baseUrl.'/media/art/'.$model->gambar : '';
?>
<img id="uploadedImage" src="<?php echo $gambar; ?>">

</div>
</div>
