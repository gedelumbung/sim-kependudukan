<?php
/* @var $this Sosial_ekonomiController */
/* @var $model SosialEkonomi */

$this->breadcrumbs=array(
	'Sosial Ekonomi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Sosial Ekonomi', 'url'=>array('sosial_ekonomi/index/'.$id)),
);
?>

<h3>Create SosialEkonomi</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>