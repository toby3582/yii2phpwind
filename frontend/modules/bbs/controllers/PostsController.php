<?php

namespace app\modules\bbs\controllers;

use app\models\BbsPosts;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;

class PostsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new BbsPosts();
        $query = $model::find()->where(['disabled'=>0]);
        $count = $query->count();
        $page = new Pagination(['totalCount'=>$count,'defaultPageSize'=>20]);
        $result = $query->offset($page->offset)->limit($page->limit)->asArray()->all();
        return  Json::encode($result);

    }
}
