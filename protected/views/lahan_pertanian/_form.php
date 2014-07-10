<?php
/* @var $this Lahan_pertanianController */
/* @var $model LahanPertanian */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lahan-pertanian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<?php $model->id_rt = $id; ?>
	<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_rt'); ?>
		<?php echo CHtml::dropDownList(
						'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
		<?php echo $form->error($model,'id_rt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lahan_pertanian'); ?>
		<?php echo $form->textField($model,'lahan_pertanian',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lahan_pertanian'); ?>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Status Lahan</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<h5>Luas Sawah</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<h5>Lahan Kering</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<h5>Luas Sawah</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<h5>Lahan Kering</h5>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Dimiliki (dibeli, warisan, hibah, dsb)</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'milik_sendiri_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'milik_sendiri_pencacahan_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'milik_sendiri_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'milik_sendiri_pencacahan_lahan_kering'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'milik_sendiri_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'milik_sendiri_setahun_lalu_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'milik_sendiri_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'milik_sendiri_setahun_lalu_lahan_kering'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Milik pihak lain yang dikuasai</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pihak_lain_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pihak_lain_pencacahan_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pihak_lain_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pihak_lain_pencacahan_lahan_kering'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pihak_lain_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pihak_lain_setahun_lalu_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pihak_lain_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pihak_lain_setahun_lalu_lahan_kering'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Dimiliki tetapi berada di pihak lain</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'sendiri_pihak_lain_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sendiri_pihak_lain_pencacahan_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'sendiri_pihak_lain_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sendiri_pihak_lain_pencacahan_lahan_kering'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'sendiri_pihak_lain_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sendiri_pihak_lain_setahun_lalu_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'sendiri_pihak_lain_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sendiri_pihak_lain_setahun_lalu_lahan_kering'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Dikuasai (a+b+c)</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'dikuasai_pencacahan_luas_swah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'dikuasai_pencacahan_luas_swah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'dikuasai_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'dikuasai_pencacahan_lahan_kering'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'dikuasai_setahun_lalu_luas_swah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'dikuasai_setahun_lalu_luas_swah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'dikuasai_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'dikuasai_setahun_lalu_lahan_kering'); ?>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<div class="row">
				<h5>Diusahakan untuk pertanian</h5>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pertanian_pencacahan_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pertanian_pencacahan_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pertanian_pencacahan_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pertanian_pencacahan_lahan_kering'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pertanian_setahun_lalu_luas_sawah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pertanian_setahun_lalu_luas_sawah'); ?>
			</div>
		</div>
		<div class="span2">
			<div class="row">
				<?php echo $form->textField($model,'pertanian_setahun_lalu_lahan_kering',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pertanian_setahun_lalu_lahan_kering'); ?>
			</div>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>