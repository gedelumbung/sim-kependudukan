<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index'),
	$model->id_keterangan_keluarga=>array('view','id'=>$model->id_keterangan_keluarga),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List KeteranganKeluarga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create KeteranganKeluarga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View KeteranganKeluarga', 'url'=>array('view', 'id'=>$model->id_keterangan_keluarga)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage KeteranganKeluarga', 'url'=>array('admin')),
);
?>

<h3>Update KeteranganKeluarga <?php echo $model->id_keterangan_keluarga; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>