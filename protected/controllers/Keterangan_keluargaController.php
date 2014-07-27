<?php

class Keterangan_keluargaController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
	}
	
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition = "id_rt = '".$id."'";
		$m=KeteranganKeluarga::model()->findByAttributes(array(),$criteria);

		if($m===null)
		{
			$model=new KeteranganKeluarga;

			if(isset($_POST['KeteranganKeluarga']))
			{
				$model->attributes=$_POST['KeteranganKeluarga'];
				if($model->save())
					$this->redirect(array('index','id'=>$model->id_rt));
			}

			$this->render('create',array(
				'model'=>$model,
				'id' => $id
			));
		}
		else
		{
			$model=$this->loadModel($id);

			if(isset($_POST['KeteranganKeluarga']))
			{
				$model->attributes=$_POST['KeteranganKeluarga'];
				if($model->save())
					$this->redirect(array('index','id'=>$model->id_rt));
			}

			$this->render('update',array(
				'model'=>$model,
				'id'=>$id,
			));
		}
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return KeteranganKeluarga the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$criteria=new CDbCriteria;

		$criteria->condition = "id_rt = '".$id."'";
		$model=KeteranganKeluarga::model()->findByAttributes(array(),$criteria);
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param KeteranganKeluarga $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='keterangan-keluarga-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
