<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */
/* @var $form CActiveForm */
?>

<style type="text/css">
	select{
		width: 100%;
	}
</style>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perumahan-survey-form',
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
			<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'id_rt'); ?>
				<?php echo CHtml::dropDownList(
								'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
				<?php echo $form->error($model,'id_rt'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jenis_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[jenis_rumah]',$model->jenis_rumah,
								array(
									''=>'Semua',
									'Rumah Formal'=>'Rumah Formal',
									'Rumah Swadaya'=>'Rumah Swadaya',
									'Rumah Dinas'=>'Rumah Dinas',
								)
							); ?>
				<?php echo $form->error($model,'jenis_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'konstruksi_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[konstruksi_rumah]',$model->konstruksi_rumah,
								array(
									''=>'Semua',
									'Permanen'=>'Permanen',
									'Semi Permanen'=>'Semi Permanen',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'konstruksi_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kepemilikan_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kepemilikan_rumah]',$model->kepemilikan_rumah,
								array(
									''=>'Semua',
									'Milik Sendiri'=>'Milik Sendiri',
									'Sewa/Kontrak'=>'Sewa Kontrak',
									'Pinjam/Numpang gratis'=>'Pinjam/Numpang gratis',
									'Rumah Dinas'=>'Rumah Dinas',
								)
							); ?>
				<?php echo $form->error($model,'kepemilikan_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'fungsi_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[fungsi_rumah]',$model->fungsi_rumah,
								array(
									''=>'Semua',
									'Rumah Tinggal'=>'Rumah Tinggal',
									'Rumah Toko'=>'Rumah Toko',
									'Rumah Kantor'=>'Rumah Kantor',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'fungsi_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tahun_pembuatan_rumah'); ?>
				<?php echo $form->textField($model,'tahun_pembuatan_rumah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tahun_pembuatan_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jumlah_lantai'); ?>
				<?php echo $form->textField($model,'jumlah_lantai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jumlah_lantai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'luas_lantai_1'); ?>
				<?php echo $form->textField($model,'luas_lantai_1',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'luas_lantai_1'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'luas_lantai_2'); ?>
				<?php echo $form->textField($model,'luas_lantai_2',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'luas_lantai_2'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'luas_lantai_3'); ?>
				<?php echo $form->textField($model,'luas_lantai_3',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'luas_lantai_3'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'luas_pekarangan'); ?>
				<?php echo $form->textField($model,'luas_pekarangan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'luas_pekarangan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bagian_terluas_atap'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[bagian_terluas_atap]',$model->bagian_terluas_atap,
								array(
									''=>'Semua',
									'Metal/Aluminium'=>'Metal/Aluminium',
									'Sirap/Kayu'=>'Sirap/Kayu',
									'Genteng (Tanah Liat)'=>'Genteng (Tanah Liat)',
									'Asbes'=>'Asbes',
									'Seng'=>'Seng',
									'Daun Rumbia/Nipa'=>'Daun Rumbia/Nipa',
									'Alang-alang'=>'Alang-alang',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'bagian_terluas_atap'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kondisi_atap_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kondisi_atap_rumah]',$model->kondisi_atap_rumah,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Rusak/Bocor'=>'Rusak/Bocor',
								)
							); ?>
				<?php echo $form->error($model,'kondisi_atap_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bagian_terluas_dinding'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[bagian_terluas_dinding]',$model->bagian_terluas_dinding,
								array(
									''=>'Semua',
									'Tembok'=>'Tembok',
									'Papan (kualitas bagus)'=>'Papan (kualitas bagus)',
									'Papan (kualitas jeles/hampir lapuk/lapuk)'=>'Papan (kualitas jeles/hampir lapuk/lapuk)',
									'Tripleks'=>'Tripleks',
									'Seng'=>'Seng',
									'Gamacca'=>'Gamacca',
									'Bambu'=>'Bambu',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'bagian_terluas_dinding'); ?>
			</div>
		</div>
		<div class="span6">

			<div class="row">
				<?php echo $form->labelEx($model,'kondisi_dinding_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kondisi_dinding_rumah]',$model->kondisi_dinding_rumah,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Rusak/Bocor'=>'Rusak/Bocor',
								)
							); ?>
				<?php echo $form->error($model,'kondisi_dinding_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'bagian_terluas_lantai'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[bagian_terluas_lantai]',$model->bagian_terluas_lantai,
								array(
									''=>'Semua',
									'Tegel/Keramik'=>'Tegel/Keramik',
									'Papan (kualitas bagus)'=>'Papan (kualitas bagus)',
									'Semen'=>'Semen',
									'Papan (kualitas jelek/hampir lapuk/lapuk)'=>'Papan (kualitas jelek/hampir lapuk/lapuk)',
									'Bambu'=>'Bambu',
									'Tanah'=>'Tanah',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'bagian_terluas_lantai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kondisi_lantai_rumah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kondisi_lantai_rumah]',$model->kondisi_lantai_rumah,
								array(
									''=>'Semua',
									'Baik'=>'Baik',
									'Rusak/Bocor'=>'Rusak/Bocor',
								)
							); ?>
				<?php echo $form->error($model,'kondisi_lantai_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jumlah_kepemilikan_rumah_lainnya'); ?>
				<?php echo $form->textField($model,'jumlah_kepemilikan_rumah_lainnya',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jumlah_kepemilikan_rumah_lainnya'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'alamat_rumah_lainnya'); ?>
				<?php echo $form->textArea($model,'alamat_rumah_lainnya',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'alamat_rumah_lainnya'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kepemilikan_imb'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kepemilikan_imb]',$model->kepemilikan_imb,
								array(
									''=>'Semua',
									'Memiliki'=>'Memiliki',
									'Tidak Memiliki'=>'Tidak Memiliki',
								)
							); ?>
				<?php echo $form->error($model,'kepemilikan_imb'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'penertiban_imb'); ?>
				<?php echo $form->textField($model,'penertiban_imb',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'penertiban_imb'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kepemilikan_surat_tanah'); ?>
				<?php echo CHtml::dropDownList(
							'PerumahanSurvey[kepemilikan_surat_tanah]',$model->kepemilikan_surat_tanah,
								array(
									''=>'Semua',
									'Sertifikat Hak Milik'=>'SemSertifikat Hak Milikua',
									'Sertifikat Hak Pakai'=>'Sertifikat Hak Pakai',
									'Sertifikat Hak Guna Usaha'=>'Sertifikat Hak Guna Usaha',
									'Akta Jual Beli'=>'Akta Jual Beli',
									'SKT Camat'=>'SKT Camat',
									'SKT Lurah'=>'SKT Lurah',
									'Girik Bengkok'=>'Girik Bengkok',
									'Sporadik'=>'Sporadik',
									'Tidak Punya'=>'Tidak Punya',
									'Lainnya'=>'Lainnya',
								)
							); ?>
				<?php echo $form->error($model,'kepemilikan_surat_tanah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jarak_sempadan_jalan'); ?>
				<?php echo $form->textField($model,'jarak_sempadan_jalan',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jarak_sempadan_jalan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jarak_sempadan_sungai'); ?>
				<?php echo $form->textField($model,'jarak_sempadan_sungai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jarak_sempadan_sungai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jarak_sempadan_pantai'); ?>
				<?php echo $form->textField($model,'jarak_sempadan_pantai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jarak_sempadan_pantai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jarak_sempadan_irigasi'); ?>
				<?php echo $form->textField($model,'jarak_sempadan_irigasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jarak_sempadan_irigasi'); ?>
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
			           'action'=>Yii::app()->createUrl('perumahan_survey/add_gambar'),
			           'allowedExtensions'=>array("jpg","png"),
			           'sizeLimit'=>5*1024*1024,// maximum file size in bytes
			           'onComplete'=>"js:function(id, fileName, responseJSON){ 
			           		$('#PerumahanSurvey_gambar').val(responseJSON['filename']); 
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
				$gambar = !empty($model->gambar) ? Yii::app()->baseUrl.'/media/perumahan/'.$model->gambar : '';
			?>
			<img id="uploadedImage" src="<?php echo $gambar; ?>">
		</div>
	</div>
</div>

<div class='row-fluid'>
	<div class="span6">
		<div class="row">
			<?php echo $form->labelEx($model,'gambar_2'); ?>
			<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
			array(
			    'id'=>'uploadFile2',
			    'config'=>array(
			           'action'=>Yii::app()->createUrl('perumahan_survey/add_gambar'),
			           'allowedExtensions'=>array("jpg","png"),
			           'sizeLimit'=>5*1024*1024,// maximum file size in bytes
			           'onComplete'=>"js:function(id, fileName, responseJSON){ 
			           		$('#PerumahanSurvey_gambar_2').val(responseJSON['filename']); 
			           		$('#uploadedImage2').attr('src', responseJSON['url']);
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
			<?php echo $form->textField($model,'gambar_2', array('readonly' => true)); ?>
			<?php echo $form->error($model,'gambar_2'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="row">
			<?php
				$gambar_2 = !empty($model->gambar_2) ? Yii::app()->baseUrl.'/media/perumahan/'.$model->gambar_2 : '';
			?>
			<img id="uploadedImage2" src="<?php echo $gambar_2; ?>">
		</div>
	</div>
</div>

<div class='row-fluid'>
	<div class="span6">
		<div class="row">
			<?php echo $form->labelEx($model,'gambar_3'); ?>
			<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
			array(
			    'id'=>'uploadFile3',
			    'config'=>array(
			           'action'=>Yii::app()->createUrl('perumahan_survey/add_gambar'),
			           'allowedExtensions'=>array("jpg","png"),
			           'sizeLimit'=>5*1024*1024,// maximum file size in bytes
			           'onComplete'=>"js:function(id, fileName, responseJSON){ 
			           		$('#PerumahanSurvey_gambar_3').val(responseJSON['filename']); 
			           		$('#uploadedImage3').attr('src', responseJSON['url']);
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
			<?php echo $form->textField($model,'gambar_3', array('readonly' => true)); ?>
			<?php echo $form->error($model,'gambar_3'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="row">
			<?php
				$gambar_3 = !empty($model->gambar_3) ? Yii::app()->baseUrl.'/media/perumahan/'.$model->gambar_3 : '';
			?>
			<img id="uploadedImage3" src="<?php echo $gambar_3; ?>">
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