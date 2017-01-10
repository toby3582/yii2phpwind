<?php

namespace app\modules\bbs\controllers;

use app\models\BbsThreads;
use app\models\BbsThreadsContent;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;

class ThreadController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new BbsThreads();
        $query = $model::find()->where(['disabled'=>0]);
        $count = $query->count();
        $page = new Pagination(['totalCount'=>$count,'defaultPageSize'=>20]);
        $result = $query->offset($page->offset)->limit($page->limit)->asArray()->all();
        return  Json::encode($result);

    }

    /**
     * @param $tid
     * @return string
     */
    public function actionRead($tid){
        $tid = intval($tid);
        $return = [];
        if(!$tid){
            $return['status'] = false;
            $return['error'] = '参数错误';
            return Json::encode($return);
        }
        $model = new BbsThreadsContent();
        $result=$model::findOne(['tid'=>$tid]);
        if($result){
            $result = array('status'=>true,'data'=>$result->attributes);
        }else{
            $result = array('status'=>false,'error'=>'帖子不存在');
        }
        return Json::encode($result);
    }
}
