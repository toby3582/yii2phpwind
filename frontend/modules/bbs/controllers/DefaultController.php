<?php

namespace app\modules\bbs\controllers;

use app\models\BbsForum;
use app\models\BbsForumQuery;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Controller;

/**
 * Default controller for the `bbs` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new BbsForum();
        $query = $model::find()->where(['isshow'=>1]);
        $count = $query->count();
        $page = new Pagination(['totalCount'=>$count,'defaultPageSize'=>20]);
        $result = $query->offset($page->offset)->limit($page->limit)->asArray()->all();
        return  Json::encode($result);

    }
}
