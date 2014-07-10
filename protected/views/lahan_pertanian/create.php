<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */

$this->breadcrumbs=array(
	'Lahan Pertanian'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Lahan Pertanian', 'url'=>array('lahan_pertanian/index/'.$id)),
);
?>

<h3>Create LahanPertanian</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>