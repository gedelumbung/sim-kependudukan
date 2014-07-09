<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */
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
	'id'=>'pengeluaran-non-makanan-form',
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

			<h5>16. Perumahan dan fasilitas rumah tangga</h5>

			<h5>a. Sewa, kontrak, perkiraan sewa rumah (milik sendiri, bebas sewa, dinas) dan lain-lain</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'sewa_rumah'); ?>
				<?php echo $form->textField($model,'sewa_rumah', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sewa_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'sewa_rumah_setahun'); ?>
				<?php echo $form->textField($model,'sewa_rumah_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sewa_rumah_setahun'); ?>
			</div>

			<h5>b. Pemeliharaan rumah dan perbaikan ringan</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'pemeliharaan_rumah'); ?>
				<?php echo $form->textField($model,'pemeliharaan_rumah', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pemeliharaan_rumah'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pemeliharaan_rumah_setahun'); ?>
				<?php echo $form->textField($model,'pemeliharaan_rumah_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pemeliharaan_rumah_setahun'); ?>
			</div>

			<h5>c. Rekening listrik, air, gas, minyak tanah, kayu bakar, dll</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'rekening_rt'); ?>
				<?php echo $form->textField($model,'rekening_rt', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rekening_rt'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'rekening_rt_setahun'); ?>
				<?php echo $form->textField($model,'rekening_rt_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rekening_rt_setahun'); ?>
			</div>

			<h5>d. Rekening telepon rumah, pulsa HP, telepon umum, wartel, benda pos, dll</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'rekening_elektrik'); ?>
				<?php echo $form->textField($model,'rekening_elektrik', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rekening_elektrik'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'rekening_elektrik_setahun'); ?>
				<?php echo $form->textField($model,'rekening_elektrik_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'rekening_elektrik_setahun'); ?>
			</div>

			<h5>17. Aneka barang dan jasa</h5>

			<h5>a. Sabun mandi/cuci, kosmetik, perawatan, rambut/muka, tissue, dll</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'sabun_kosmetik'); ?>
				<?php echo $form->textField($model,'sabun_kosmetik', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sabun_kosmetik'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'sabun_kosmetik_setahun'); ?>
				<?php echo $form->textField($model,'sabun_kosmetik_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sabun_kosmetik_setahun'); ?>
			</div>

			<h5>b. Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'biaya_kesehatan'); ?>
				<?php echo $form->textField($model,'biaya_kesehatan', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_kesehatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'biaya_kesehatan_setahun'); ?>
				<?php echo $form->textField($model,'biaya_kesehatan_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_kesehatan_setahun'); ?>
			</div>

			<h5>c. Biaya pendidikan (uang pendaftaran, SPP, POMG/BP3, uang pangkat/daftar ulang, pramuka, prakarya, kursus dan lainnya)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'biaya_kesehatan'); ?>
				<?php echo $form->textField($model,'biaya_kesehatan', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_kesehatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'biaya_kesehatan_setahun'); ?>
				<?php echo $form->textField($model,'biaya_kesehatan_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'biaya_kesehatan_setahun'); ?>
			</div>

			<h5>d. Jasa lainnya (gaji sopir, pembantu rt, hotel, dll)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'jasa_lainnya'); ?>
				<?php echo $form->textField($model,'jasa_lainnya', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jasa_lainnya'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jasa_lainnya_setahun'); ?>
				<?php echo $form->textField($model,'jasa_lainnya_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'jasa_lainnya_setahun'); ?>
			</div>
		</div>

		<div class="span6">
			<h5>18. Pakaian, alas kaki dan penutup kepala (pakaian jadi, bahan pakaian, topi, sepatu dan lainnya)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'pakaian'); ?>
				<?php echo $form->textField($model,'pakaian', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pakaian'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pakaian_setahun'); ?>
				<?php echo $form->textField($model,'pakaian_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pakaian_setahun'); ?>
			</div>

			<h5>19. Barang tahan lama (alat rumah tangga, perkakas, alat dapur, alat hiburan)</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'barang_tahan_lama'); ?>
				<?php echo $form->textField($model,'barang_tahan_lama', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'barang_tahan_lama'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'barang_tahan_lama_setahun'); ?>
				<?php echo $form->textField($model,'barang_tahan_lama_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'barang_tahan_lama_setahun'); ?>
			</div>

			<h5>20. Pajak punutuan dan asuransi</h5>

			<h5>a. PBB (pajak bumi dan bangunan) dan kendaraan</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'pbb'); ?>
				<?php echo $form->textField($model,'pbb', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pbb'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pbb_setahun'); ?>
				<?php echo $form->textField($model,'pbb_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pbb_setahun'); ?>
			</div>

			<h5>b. Pungutan/retribusi</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'retribusi'); ?>
				<?php echo $form->textField($model,'retribusi', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'retribusi'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'retribusi_setahun'); ?>
				<?php echo $form->textField($model,'retribusi_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'retribusi_setahun'); ?>
			</div>

			<h5>c. Asuransi kesehatan</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'askes'); ?>
				<?php echo $form->textField($model,'askes', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'askes'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'askes_setahun'); ?>
				<?php echo $form->textField($model,'askes_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'askes_setahun'); ?>
			</div>

			<h5>d. Pajak lainnya</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'pajak_lainnya'); ?>
				<?php echo $form->textField($model,'pajak_lainnya', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pajak_lainnya'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pajak_lainnya_setahun'); ?>
				<?php echo $form->textField($model,'pajak_lainnya_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'pajak_lainnya_setahun'); ?>
			</div>

			<h5>21. Keperluan pesta dan ucapan/kenduri</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'keperluan_pesta'); ?>
				<?php echo $form->textField($model,'keperluan_pesta', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'keperluan_pesta'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'keperluan_pesta_setahun'); ?>
				<?php echo $form->textField($model,'keperluan_pesta_setahun', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'keperluan_pesta_setahun'); ?>
			</div>

			<h5>22. Sumber penghasilan utama rumah tangga</h5>

			<div class="row">
				<?php echo $form->labelEx($model,'sumber_penghasilan_utama_rt'); ?>
				<?php echo $form->textArea($model,'sumber_penghasilan_utama_rt', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'sumber_penghasilan_utama_rt'); ?>
			</div>

			<h5>23. Isikan kode lapangan usaha/penerima pendapatan dan status pekerjaan sesuai sumber penghasilan utama rumah tangga. Tiga digit pertama untuk kode lapangan usaha/penerima pendapatan dan satu digit terakhir untuk kode status pekerjaan</h5>

			<ol>
				<li>Buruh/Karyawan</li>
				<li>Pengusaha</li>
			</ol>

			<div class="row">
				<?php echo $form->labelEx($model,'kode_status_pekerjaan'); ?>
				<?php echo $form->textField($model,'kode_status_pekerjaan', array('class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'kode_status_pekerjaan'); ?>
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