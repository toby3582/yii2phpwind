<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[BbsForum]].
 *
 * @see BbsForum
 */
class BbsForumQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return BbsForum[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return BbsForum|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
