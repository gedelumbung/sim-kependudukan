<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Users', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Users', 'url'=>array('admin')),
);
?>

<h1>User</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
