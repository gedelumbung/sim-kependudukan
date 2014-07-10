<?php
/* @var $this Sosial_ekonomiController */
/* @var $model SosialEkonomi */

$this->breadcrumbs=array(
	'Sosial Ekonomi'=>array('index'),
	$model->id_sosial_ekonomi=>array('view','id'=>$model->id_sosial_ekonomi),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Sosial Ekonomi', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update SosialEkonomi <?php echo $model->id_sosial_ekonomi; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>