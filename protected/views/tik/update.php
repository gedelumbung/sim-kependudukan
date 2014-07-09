<?php
/* @var $this TikController */
/* @var $model Tik */

$this->breadcrumbs=array(
	'Tik'=>array('index'),
	$model->id_tik=>array('view','id'=>$model->id_tik),
	'Update',
);


$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Teknologi & Komunikasi', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Teknologi & Komunikasi <?php echo $model->id_tik; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>