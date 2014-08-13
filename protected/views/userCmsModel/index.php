<?php
/* @var $this UserCmsModelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Cms Model',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create UserCmsModel', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage UserCmsModel', 'url'=>array('admin')),
);
?>

<h1>User Cms Model</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
