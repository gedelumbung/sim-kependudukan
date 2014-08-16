<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */
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
	'id'=>'desa-kelurahan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_provinsi'); ?>
			<select name="DesaKelurahan[id_provinsi]" onChange="call_kabupaten(this)">
			<option>Pilih</option>
			<?php
				$provinsi = Provinsi::model()->findAll();
				foreach($provinsi as $p)
				{
					echo '<option value="'.$p['id_provinsi'].'">'.$p['provinsi'].'</option>';
				}
			?>
			</select>
		<?php echo $form->error($model,'id_provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kabupaten'); ?>
			<select name="DesaKelurahan[id_kabupaten]" id="kabupaten" onChange="call_kecamatan(this)">
				<option>Pilih</option>
			</select>
		<?php echo $form->error($model,'id_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kecamatan'); ?>
			<select name="DesaKelurahan[id_kecamatan]" id="kecamatan">
				<option>Pilih</option>
			</select>
		<?php echo $form->error($model,'id_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desa_kelurahan'); ?>
		<?php echo $form->textField($model,'desa_kelurahan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'desa_kelurahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>