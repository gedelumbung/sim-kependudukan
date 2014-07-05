<?php
/* @var $this PendidikanController */
/* @var $model ArtPerorangan */
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
	'id'=>'art-perorangan-form',
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
		<div class="row">
			<?php echo $form->labelEx($model,'id_art'); ?>
			<?php
				$criteria = new CDbCriteria;
				$criteria->condition = "id_rt = '".$id."'";
			?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[id_art]',$model->id_art,array(''=>'Semua') + CHtml::listData(Art::model()->findAll($criteria),'id_art','nama_art')); ?>
			<?php echo $form->error($model,'id_art'); ?>
		</div>

		<h5>16. Partisipasi Sekolah :</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'partisipasi_sekolah'); ?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[partisipasi_sekolah]',$model->partisipasi_sekolah,array(''=>'Semua','Ya'=>'Ya','Tidak'=>'Tidak')); ?>
			<?php echo $form->error($model,'partisipasi_sekolah'); ?>
		</div>

		<h5>17. Kapan berhenti sekolah? <p>format bulan-tahun, isikan 00-0000 jika berhenti sebelum satu tahun terakhir</p></h5>

		<div class="row">
			<?php echo $form->labelEx($model,'berhenti_sekolah'); ?>
			<?php echo $form->textField($model,'berhenti_sekolah',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
			<?php echo $form->error($model,'berhenti_sekolah'); ?>
		</div>

		<h5>18. Jenjang dan jenis pendidikan tertinggi yang pernah/sedang diduduki :</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'pendidikan_tertinggi'); ?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[pendidikan_tertinggi]',$model->pendidikan_tertinggi,
								array(
									''=>'Semua',
									'SD'=>'SD',
									'MI'=>'MI',
									'SMP'=>'SMP',
									'MTs'=>'MTs',
									'SMA'=>'SMA',
									'MA'=>'MA',
									'SMK'=>'SMK',
									'Diploma'=>'Diploma',
									'S1'=>'S1',
									'S2'=>'S2',
									'S3'=>'S3'
								)
							); ?>
			<?php echo $form->error($model,'pendidikan_tertinggi'); ?>
		</div>
	</div>
	<div class="span6">

		<h5>19. Penyelenggara pendidikan :</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'penyelenggara_pendidikan'); ?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[penyelenggara_pendidikan]',$model->penyelenggara_pendidikan,
								array(
									''=>'Semua',
									'Pemerintah'=>'Pemerintah',
									'Swasta'=>'Swasta',
									'Luar Negeri'=>'Luar Negeri'
								)
							); ?>
			<?php echo $form->error($model,'penyelenggara_pendidikan'); ?>
		</div>

		<h5>20. Tingkat/kelas tertinggi yang pernah/sedang diduduki</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'tingkat_tertinggi'); ?>
			<?php
				$tertinggi = array(''=>'Semua');
				for ($i=1; $i<10 ; $i++) { 
					array_push($tertinggi, $i);
				}
			?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[tingkat_tertinggi]',$model->tingkat_tertinggi,
								$tertinggi
							); ?>
			<?php echo $form->error($model,'tingkat_tertinggi'); ?>
		</div>

		<h5>21. Ijazah/STTB tertinggi yang dimiliki</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'ijazah_tertinggi'); ?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[ijazah_tertinggi]',$model->ijazah_tertinggi,
								array(
									''=>'Semua',
									'Tidak punya ijazah SD'=>'Tidak punya ijazah SD',
									'SD'=>'SD',
									'MI'=>'MI',
									'SMP'=>'SMP',
									'MTs'=>'MTs',
									'SMA'=>'SMA',
									'MA'=>'MA',
									'SMK'=>'SMK',
									'Diploma'=>'Diploma',
									'S1'=>'S1',
									'S2'=>'S2',
									'S3'=>'S3'
								)
							); ?>
			<?php echo $form->error($model,'ijazah_tertinggi'); ?>
		</div>

		<h5>22. Dapat membaca dan menulis</h5>

		<div class="row">
			<?php echo $form->labelEx($model,'membaca_menulis'); ?>
			<?php echo CHtml::dropDownList(
								'ArtPerorangan[membaca_menulis]',$model->membaca_menulis,array(''=>'Semua','Huruf Latin'=>'Huruf Latin','Huruf Lainnya'=>'Huruf Lainnya','Tidak dapat'=>'Tidak dapat')); ?>
			<?php echo $form->error($model,'membaca_menulis'); ?>
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