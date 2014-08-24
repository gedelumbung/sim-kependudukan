<?php
/* @var $this ArtController */
/* @var $model Art */
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
	'id'=>'art-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

<div class="row-fluid">
	<div class="span6">
		<?php $model->id_rt = $id; ?>
		<?php echo $form->hiddenField($model,'id_rt', array('class'=>'input-block-level')); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'id_rt'); ?>
			<?php echo CHtml::dropDownList(
							'Art[id_rt]',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
			<?php echo $form->error($model,'id_rt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nik'); ?>
			<?php echo $form->textField($model,'nik',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nik'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nama_art'); ?>
			<?php echo $form->textField($model,'nama_art',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'nama_art'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'hubungan_krt'); ?>
			<?php echo $form->textField($model,'hubungan_krt',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'hubungan_krt'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'jk'); ?>
			<?php echo CHtml::dropDownList(
							'Art[jk]',$model->jk,array(''=>'Semua','Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan')); ?>
			<?php echo $form->error($model,'jk'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tmp_lahir'); ?>
			<?php echo $form->textField($model,'tmp_lahir',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'tmp_lahir'); ?>
		</div>
	</div>

	<div class="span6">

		<div class="row">
			<?php echo $form->labelEx($model,'tgl_lahir'); ?>
			<?php echo $form->textField($model,'tgl_lahir',array('size'=>30,'maxlength'=>30, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'tgl_lahir'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'status_kawin'); ?>
			<?php echo $form->textField($model,'status_kawin',array('size'=>60,'maxlength'=>75, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'status_kawin'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'gol_darah'); ?>
			<?php echo $form->textField($model,'gol_darah',array('size'=>2,'maxlength'=>2, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'gol_darah'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kartu_kk'); ?>
			<?php echo CHtml::dropDownList(
							'Art[kartu_kk]',$model->kartu_kk,
								array(
									''=>'Semua',
									'Ya'=>'Ya',
									'Tidak'=>'Tidak'
								)
							); ?>
			<?php echo $form->error($model,'kartu_kk'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kartu_ak'); ?>
			<?php echo CHtml::dropDownList(
							'Art[kartu_ak]',$model->kartu_ak,
								array(
									''=>'Semua',
									'Ya'=>'Ya',
									'Tidak'=>'Tidak'
								)
							); ?>
			<?php echo $form->error($model,'kartu_ak'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'buku_nikah'); ?>
			<?php echo CHtml::dropDownList(
							'Art[buku_nikah]',$model->buku_nikah,
								array(
									''=>'Semua',
									'Ya'=>'Ya',
									'Tidak'=>'Tidak'
								)
							); ?>
			<?php echo $form->error($model,'buku_nikah'); ?>
		</div>
	</div>
</div>
<div class='row-fluid'>
	<div class="span6">
		<div class="row">
			<?php echo $form->labelEx($model,'gambar'); ?>
			<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
			array(
			    'id'=>'uploadFile',
			    'config'=>array(
			           'action'=>Yii::app()->createUrl('art/add_gambar'),
			           'allowedExtensions'=>array("jpg","png"),
			           'sizeLimit'=>5*1024*1024,// maximum file size in bytes
			           'onComplete'=>"js:function(id, fileName, responseJSON){ 
			           		$('#Art_gambar').val(responseJSON['filename']); 
			           		$('#uploadedImage').attr('src', responseJSON['url']);
			           }",
			           'messages'=>array(
													'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
													'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
													'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
													'emptyError'=>"{file} is empty, please select files again without it.",
													'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
			                            ),
			           'showMessage'=>"js:function(message){ alert(message); }"
			          )
			)); ?>
			<?php echo $form->textField($model,'gambar', array('readonly' => true)); ?>
			<?php echo $form->error($model,'gambar'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="row">
			<?php
				$gambar = !empty($model->gambar) ? Yii::app()->baseUrl.'/media/art/'.$model->gambar : '';
			?>
			<img id="uploadedImage" src="<?php echo $gambar; ?>">
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