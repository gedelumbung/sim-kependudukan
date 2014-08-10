<?php class jqBarGraph  extends CWidget 
{   
	public $colors=array('#3D0017','#6B0E1D','#AB2522');
	public $legend=false;
	public $legends;
	public $title ="simple graph";
	public $color1 ="red";
	public $color2="green";
	public $width="100";
	public $space="5";
	public $type="simple";
	public $values=array();
	public function init()
 	{
		$url = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.jqBarGraph'));	
		Yii::app()->clientScript->registerScriptFile($url.'/assets/js/jquery.js',CClientScript::POS_BEGIN) ;
		Yii::app()->clientScript->registerScriptFile($url.'/assets/js/jqBarGraph.js',CClientScript::POS_BEGIN) ;
		Yii::app()->clientScript->registerCssFile($url.'/assets/css/styles2.css');
	}
 	public function run()
	{
	$type=$this->type;
	if($this->type=="simple")
	{
	$color1=$this->color1;
	$color2=$this->color2;
	$width=$this->width;
	$space=$this->space;
	$title=$this->title;
	$val=$this->values;
	$r=json_encode($val);
	Yii::app()->clientScript->registerScript('scrip1',"graphByMonth =".$r." ;
$(\"#simpleGraph\").jqBarGraph({
	data: graphByMonth,
	width: ".$width.",
	colors: ['".$color1."','".$color2."'],
	color: '#1A2944',
	barSpace: ".$space.",
	title: '<h3>".$title."</h3>'
});",CClientScript::POS_END);
	$this->render('bargraph');
	}
	elseif($this->type=="multi")
	{

	$array2=$this->values;
	$col=$this->colors;
	$leg=$this->legends;
	$legends=json_encode($leg);
	$legend="true";
	$width=$this->width;
	$title=$this->title;
	$color=json_encode($col);
	$p=json_encode($array2);
	Yii::app()->clientScript->registerScript('scrip2',"graphResolutionByYear=".$p.";$('#multiGraph').jqBarGraph({
	data: graphResolutionByYear,
	colors: ".$color.",
	legends:".$legends." ,
	legend: ".$legend.",
	width: ".$width.",
	type:'multi',
	postfix: '%',
	title: '".$title."'
});",CClientScript::POS_END);
	$this->render('bargraph');
	}
	elseif($this->type=="stacked")
	{
	$array2=$this->values;
	$col=$this->colors;
	$leg=$this->legends;
	$legends=json_encode($leg);
	$legend="true";
	$width=$this->width;
	$title=$this->title;
	$color=json_encode($col);
	$p=json_encode($array2);
	Yii::app()->clientScript->registerScript('scrip5',"graphResolution=".$p.";$('#stackedGraph').jqBarGraph({
	data: graphResolution,
	colors: ".$color.",
	legends:".$legends." ,
	legend: ".$legend.",
	width: ".$width.",
	type:'stacked',
	postfix: '%',
	title: '".$title."'
});",CClientScript::POS_END);
	$this->render('bargraph');
	}
	}
	}

?>