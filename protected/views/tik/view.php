<?php
/* @var $this TikController */
/* @var $model Tik */

$this->breadcrumbs=array(
	'Tik'=>array('index'),
	$model->id_tik,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> Manage Teknologi & Komunikasi', 'url'=>array('index', 'id'=>$model->id_rt)),
);
?>

<h3>View Teknologi & Komunikasi #<?php echo $model->id_tik; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tik',
		'id_rt',
		'telepon',
		'handphone',
		'jumlah_no_handphone',
		'komputer',
		'internet',
		'jumlah_pengguna_internet',
		'internet_warnet',
		'jumlah_pengguna_internet_warnet',
		'internet_kantor_sekolah',
		'jumlah_pengguna_internet_kantor_sekolah',
		'internet_lainnya',
		'jumlah_pengguna_internet_lainnya',
	),
)); ?>

</div>
</div>
