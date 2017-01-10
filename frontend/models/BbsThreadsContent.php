<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%bbs_threads_content}}".
 *
 * @property integer $tid
 * @property integer $useubb
 * @property integer $usehtml
 * @property integer $aids
 * @property string $content
 * @property integer $sell_count
 * @property string $reminds
 * @property integer $word_version
 * @property string $tags
 * @property string $ipfrom
 * @property string $manage_remind
 */
class BbsThreadsContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bbs_threads_content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid'], 'required'],
            [['tid', 'useubb', 'usehtml', 'aids', 'sell_count', 'word_version'], 'integer'],
            [['content'], 'string'],
            [['reminds', 'tags', 'ipfrom'], 'string', 'max' => 255],
            [['manage_remind'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'useubb' => 'Useubb',
            'usehtml' => 'Usehtml',
            'aids' => 'Aids',
            'content' => 'Content',
            'sell_count' => 'Sell Count',
            'reminds' => 'Reminds',
            'word_version' => 'Word Version',
            'tags' => 'Tags',
            'ipfrom' => 'Ipfrom',
            'manage_remind' => 'Manage Remind',
        ];
    }
}
