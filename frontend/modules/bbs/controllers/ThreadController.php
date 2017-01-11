<?php

namespace app\modules\bbs\controllers;

use app\models\BbsThreads;
use app\models\BbsThreadsContent;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Request;

class ThreadController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $request = \Yii::$app->request;
        $page = $request->get('page');
        if(!$page){
            $page = 1;
        }
        $limit = 10;
        $ofset = $page*10;
        $model = new BbsThreads();
        $query = $model::find()->where(['disabled'=>0]);
        $query->joinWith('user',false)->joinWith('forum',false)->select('qc_bbs_threads.*,qc_user.username,qc_bbs_forum.name as fname');
        $count = $query->count();
        $result = $query->offset($ofset)->limit($limit)->orderBy('qc_bbs_threads.tid desc')->asArray()->all();
//        echo $query->createCommand()->sql;
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
