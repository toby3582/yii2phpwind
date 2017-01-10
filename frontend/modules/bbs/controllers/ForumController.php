<?php

namespace app\modules\bbs\controllers;

use app\models\BbsForum;
use app\models\BbsForumQuery;
use yii\helpers\Json;
use yii\web\Controller;

/**
 * Default controller for the `bbs` module
 */
class ForumController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new BbsForum();
        $alls = $model::find()->where(['isshow'=>1,'hassub'=>0,'type'=>'forum'])->asArray()->all();
        $result = $alls;
        return  Json::encode($result);
    }

    public function actionView($fid){
        $fid = intval($fid);
        $return = [];
        if(!$fid){
            $return = ['status'=>false,'error'=>'参数错误'];
            return Json::encode($return);
        }
        $model = new BbsForum();
        $result = $model::findOne(['fid'=>$fid,'isshow'=>1]);
        if($result){
            $return = ['status'=>true,'msg'=>'加载成功','data'=>$result->attributes];
        }else{
            $return = ['status'=>false,'error'=>'参数错误，无数据'];
        }
        return Json::encode($return);
    }

}
