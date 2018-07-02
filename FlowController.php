<?php
namespace  console\controllers;
use yii\console\Controller;
use common\models\SeSchool;
use common\models\Vcloud;

class FlowController extends Controller{

	public function actionIndex($message = 'hello world')
	{
		date_default_timezone_set('Asia/Shanghai');
		
		$startTime=date('Y-m-d',strtotime("-1 day"));
		$endTime=date('Y-m-d',strtotime("-2 day"));
		//var_dump($nowTime.'Z');exit();
		$domain= SeSchool::find()->all();
		if(count($domain)==0){
        	die('end');
        }
        $vc=new Vcloud();
        foreach ($domain as $model) {
        	$flow=$vc->getStreamMoney($model->domain,$endTime.'T16:00:00Z',$startTime.'T16:00:00Z');
        	$flow=round($flow/1024);
        	$model->dataused+=$flow;
        	$model->save();
        }       
       
	}
}