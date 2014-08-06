<?php

class Kanal_desaController extends Controller
{
	public function actionView($id)
	{
		$merge_id = '';
	   $criteria_des= new CDbCriteria;  
	   $criteria_des->condition ='id_desa_kelurahan = "'.$id.'" ';
	   $desa = DesaKelurahan::model()->find($criteria_des);

	   $model['attr_wilayah'] = $desa;

		$this->render('index', array(
				'model' => $model
			));
   }
}