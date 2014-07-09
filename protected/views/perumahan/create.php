<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Perumahan', 'url'=>array('perumahan/index/'.$id)),
);
?>

<h3>Create Perumahan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>