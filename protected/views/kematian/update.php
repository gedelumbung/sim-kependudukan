<?php
/* @var $this KematianController */
/* @var $model Kematian */

$this->breadcrumbs=array(
	'Kematian'=>array('index'),
	$model->id_kematian=>array('view','id'=>$model->id_kematian),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kematian', 'url'=>array('kematian/index/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kematian', 'url'=>array('kematian/create/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-eye-open"></i> View Kematian', 'url'=>array('view', 'id'=>$model->id_kematian)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kematian', 'url'=>array('kematian/admin/'.$model->id_rt)),
);
?>

<h3>Update Kematian <?php echo $model->id_kematian; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$model->id_rt)); ?>