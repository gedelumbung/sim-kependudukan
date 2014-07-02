<?php
/* @var $this ArtController */
/* @var $model Art */

$this->breadcrumbs=array(
	'Art'=>array('index'),
	$model->id_art=>array('view','id'=>$model->id_art),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Art', 'url'=>array('art/index/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Art', 'url'=>array('art/create/'.$model->id_rt)),
	array('label'=>'<i class="icon icon-eye-open"></i> View Art', 'url'=>array('art/view', 'id'=>$model->id_art)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Art', 'url'=>array('art/admin/'.$model->id_rt)),
);
?>

<h3>Update Art <?php echo $model->id_art; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$model->id_rt)); ?>