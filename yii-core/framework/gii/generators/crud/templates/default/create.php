<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h3>Create <?php echo $this->modelClass; ?></h3>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
