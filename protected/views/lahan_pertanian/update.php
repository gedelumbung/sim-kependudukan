<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */

$this->breadcrumbs=array(
	'Lahan Pertanian'=>array('index'),
	$model->id_lahan_pertanian=>array('view','id'=>$model->id_lahan_pertanian),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Lahan Pertanian', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update LahanPertanian <?php echo $model->id_lahan_pertanian; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>