<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_desa_kelurahan'); ?>

		<select name="id_provinsi" onChange="call_kabupaten(this)">
		<option>Pilih</option>
		<?php
			$provinsi = Provinsi::model()->findAll();
			foreach($provinsi as $p)
			{
				echo '<option value="'.$p['id_provinsi'].'">'.$p['provinsi'].'</option>';
			}
		?>
		</select>

		<select name="id_kabupaten" id="kabupaten" onChange="call_kecamatan(this)">
			<option>Pilih</option>
		</select>

		<select name="id_kecamatan" id="kecamatan" onChange="call_desa(this)">
			<option>Pilih</option>
		</select>

		<select name="RumahTangga[id_desa_kelurahan]" id="RumahTangga_id_desa_kelurahan">
			<option>Pilih</option>
		</select>

	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_krt'); ?>
		<?php echo $form->textField($model,'nama_krt',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun', array('class'=>'input-block-level')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->