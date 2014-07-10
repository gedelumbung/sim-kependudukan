<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */

$this->breadcrumbs=array(
	'Lahan Pertanian'=>array('index'),
	$model->id_lahan_pertanian,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List LahanPertanian', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create LahanPertanian', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update LahanPertanian', 'url'=>array('update', 'id'=>$model->id_lahan_pertanian)),
	array('label'=>'<i class="icon icon-trash"></i> Delete LahanPertanian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lahan_pertanian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage LahanPertanian', 'url'=>array('admin')),
);
?>

<h3>View LahanPertanian #<?php echo $model->id_lahan_pertanian; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_lahan_pertanian',
		'id_rt',
		'lahan_pertanian',
		'milik_sendiri_pencacahan_luas_sawah',
		'milik_sendiri_pencacahan_lahan_kering',
		'milik_sendiri_setahun_lalu_luas_sawah',
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
	),
)); ?>

</div>
</div>
