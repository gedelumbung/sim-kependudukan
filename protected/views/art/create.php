<?php
/* @var $this ArtController */
/* @var $model Art */

$this->breadcrumbs=array(
	'Art'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Art', 'url'=>array('art/index/'.$id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Art', 'url'=>array('art/admin/'.$id)),
);
?>

<h3>Create Art</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>