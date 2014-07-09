<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */
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
	'id'=>'pengeluaran-pangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row-fluid">
		<div class="span6">
			<?php //echo $form->errorSummary($model); ?>
	
			<?php $model->id_rt = $id; ?>
			<?php echo $form->hiddenField($model,'id_rt',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'id_rt'); ?>
				<?php echo CHtml::dropDownList(
								'',$model->id_rt,array(''=>'Semua') + CHtml::listData(RumahTangga::model()->findAll(),'id_rt','nama_krt'),array("disabled"=>"disabled")); ?>
				<?php echo $form->error($model,'id_rt'); ?>
			</div>

			<h5>1. Padi-Padian</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'beras'); ?>
				<?php echo $form->textField($model,'beras', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'beras'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'padi_lainnya'); ?>
				<?php echo $form->textField($model,'padi_lainnya', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'padi_lainnya'); ?>
			</div>

			<h5>2. Umbi-umbian (ketela pohon, ketela rambat, kentang, geplek, talas, sagu, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'umbi_umbian'); ?>
				<?php echo $form->textField($model,'umbi_umbian', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'umbi_umbian'); ?>
			</div>

			<h5>3. Ikan, udang, cumi, kerang</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'ikan_segar'); ?>
				<?php echo $form->textField($model,'ikan_segar', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'ikan_segar'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'ikan_diawetkan'); ?>
				<?php echo $form->textField($model,'ikan_diawetkan', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'ikan_diawetkan'); ?>
			</div>

			<h5>4. daging (daging, sapi/kerbau/kambing/domba/babi/ayam, jeroan, hati, limpa, abon, dendeng, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'daging'); ?>
				<?php echo $form->textField($model,'daging', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'daging'); ?>
			</div>

			<h5>5. Telur dan susu</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'telur'); ?>
				<?php echo $form->textField($model,'telur', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'telur'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'susu'); ?>
				<?php echo $form->textField($model,'susu', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'susu'); ?>
			</div>

			<h5>6. Sayur-sayuran (bayam, kangkung, ketimun, wortel, kacang panjang, buncis, bawang, cabe, tomat, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'sayur'); ?>
				<?php echo $form->textField($model,'sayur', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sayur'); ?>
			</div>

			<h5>7. Kacang-kacangan</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'kacang'); ?>
				<?php echo $form->textField($model,'kacang', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'kacang'); ?>
			</div>
		</div>
		<div class="span6">

			<h5>8. Buah-buahan</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'buah'); ?>
				<?php echo $form->textField($model,'buah', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'buah'); ?>
			</div>

			<h5>9. Minyak dan lemak</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'minyak_lemak'); ?>
				<?php echo $form->textField($model,'minyak_lemak', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'minyak_lemak'); ?>
			</div>

			<h5>10. Bahan minuman (gula pasir, gula merah, teh, kopi, coklat, sirup, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'bahan_minuman'); ?>
				<?php echo $form->textField($model,'bahan_minuman', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'bahan_minuman'); ?>
			</div>

			<h5>11. Bumbu-bumbuan (garam, kemiri, ketumbar, merica, terasi, kecap, vetsin, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'bumbu_bumbuan'); ?>
				<?php echo $form->textField($model,'bumbu_bumbuan', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'bumbu_bumbuan'); ?>
			</div>

			<h5>12. Konsumsi lainnya</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'mie'); ?>
				<?php echo $form->textField($model,'mie', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'mie'); ?>
			</div>

			<h5>kerupuk, emping, dll</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'konsumsi_lainnya'); ?>
				<?php echo $form->textField($model,'konsumsi_lainnya', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'konsumsi_lainnya'); ?>
			</div>

			<h5>13. Makanan dan minuman jadi</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'makanan_jadi'); ?>
				<?php echo $form->textField($model,'makanan_jadi', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'makanan_jadi'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'minuman_non_alkohol'); ?>
				<?php echo $form->textField($model,'minuman_non_alkohol', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'minuman_non_alkohol'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'minuman_alkohol'); ?>
				<?php echo $form->textField($model,'minuman_alkohol', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'minuman_alkohol'); ?>
			</div>

			<h5>14. Tembakau dan sirih</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'rokok'); ?>
				<?php echo $form->textField($model,'rokok', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rokok'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tembakau_lainnya'); ?>
				<?php echo $form->textField($model,'tembakau_lainnya', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tembakau_lainnya'); ?>
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