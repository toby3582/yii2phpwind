<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%bbs_posts}}".
 *
 * @property integer $pid
 * @property integer $fid
 * @property integer $tid
 * @property integer $disabled
 * @property integer $ischeck
 * @property integer $ifshield
 * @property integer $replies
 * @property integer $useubb
 * @property integer $usehtml
 * @property integer $aids
 * @property integer $rpid
 * @property string $subject
 * @property string $content
 * @property integer $like_count
 * @property integer $sell_count
 * @property integer $created_time
 * @property string $created_username
 * @property integer $created_userid
 * @property string $created_ip
 * @property integer $reply_notice
 * @property integer $modified_time
 * @property string $modified_username
 * @property integer $modified_userid
 * @property string $modified_ip
 * @property string $reminds
 * @property integer $word_version
 * @property string $ipfrom
 * @property string $manage_remind
 * @property integer $topped
 */
class BbsPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bbs_posts}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fid', 'tid', 'disabled', 'ischeck', 'ifshield', 'replies', 'useubb', 'usehtml', 'aids', 'rpid', 'like_count', 'sell_count', 'created_time', 'created_userid', 'reply_notice', 'modified_time', 'modified_userid', 'word_version', 'topped'], 'integer'],
            [['content'], 'string'],
            [['subject'], 'string', 'max' => 100],
            [['created_username', 'modified_username'], 'string', 'max' => 15],
            [['created_ip', 'modified_ip'], 'string', 'max' => 40],
            [['reminds', 'ipfrom'], 'string', 'max' => 255],
            [['manage_remind'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'fid' => 'Fid',
            'tid' => 'Tid',
            'disabled' => 'Disabled',
            'ischeck' => 'Ischeck',
            'ifshield' => 'Ifshield',
            'replies' => 'Replies',
            'useubb' => 'Useubb',
            'usehtml' => 'Usehtml',
            'aids' => 'Aids',
            'rpid' => 'Rpid',
            'subject' => 'Subject',
            'content' => 'Content',
            'like_count' => 'Like Count',
            'sell_count' => 'Sell Count',
            'created_time' => 'Created Time',
            'created_username' => 'Created Username',
            'created_userid' => 'Created Userid',
            'created_ip' => 'Created Ip',
            'reply_notice' => 'Reply Notice',
            'modified_time' => 'Modified Time',
            'modified_username' => 'Modified Username',
            'modified_userid' => 'Modified Userid',
            'modified_ip' => 'Modified Ip',
            'reminds' => 'Reminds',
            'word_version' => 'Word Version',
            'ipfrom' => 'Ipfrom',
            'manage_remind' => 'Manage Remind',
            'topped' => 'Topped',
        ];
    }
}
