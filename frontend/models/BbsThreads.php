<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%bbs_threads}}".
 *
 * @property integer $tid
 * @property integer $fid
 * @property integer $topic_type
 * @property string $subject
 * @property integer $overtime
 * @property string $highlight
 * @property string $inspect
 * @property integer $ifshield
 * @property integer $digest
 * @property integer $topped
 * @property integer $disabled
 * @property integer $ischeck
 * @property integer $replies
 * @property integer $hits
 * @property integer $like_count
 * @property string $special
 * @property integer $tpcstatus
 * @property integer $ifupload
 * @property integer $created_time
 * @property string $created_username
 * @property integer $created_userid
 * @property string $created_ip
 * @property integer $modified_time
 * @property string $modified_username
 * @property integer $modified_userid
 * @property string $modified_ip
 * @property integer $lastpost_time
 * @property integer $lastpost_userid
 * @property string $lastpost_username
 * @property integer $special_sort
 * @property integer $reply_notice
 * @property integer $reply_topped
 * @property integer $thread_status
 */
class BbsThreads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bbs_threads}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fid', 'topic_type', 'overtime', 'ifshield', 'digest', 'topped', 'disabled', 'ischeck', 'replies', 'hits', 'like_count', 'tpcstatus', 'ifupload', 'created_time', 'created_userid', 'modified_time', 'modified_userid', 'lastpost_time', 'lastpost_userid', 'special_sort', 'reply_notice', 'reply_topped', 'thread_status'], 'integer'],
            [['subject'], 'string', 'max' => 100],
            [['highlight'], 'string', 'max' => 64],
            [['inspect'], 'string', 'max' => 30],
            [['special'], 'string', 'max' => 20],
            [['created_username', 'modified_username', 'lastpost_username'], 'string', 'max' => 15],
            [['created_ip', 'modified_ip'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'fid' => 'Fid',
            'topic_type' => 'Topic Type',
            'subject' => 'Subject',
            'overtime' => 'Overtime',
            'highlight' => 'Highlight',
            'inspect' => 'Inspect',
            'ifshield' => 'Ifshield',
            'digest' => 'Digest',
            'topped' => 'Topped',
            'disabled' => 'Disabled',
            'ischeck' => 'Ischeck',
            'replies' => 'Replies',
            'hits' => 'Hits',
            'like_count' => 'Like Count',
            'special' => 'Special',
            'tpcstatus' => 'Tpcstatus',
            'ifupload' => 'Ifupload',
            'created_time' => 'Created Time',
            'created_username' => 'Created Username',
            'created_userid' => 'Created Userid',
            'created_ip' => 'Created Ip',
            'modified_time' => 'Modified Time',
            'modified_username' => 'Modified Username',
            'modified_userid' => 'Modified Userid',
            'modified_ip' => 'Modified Ip',
            'lastpost_time' => 'Lastpost Time',
            'lastpost_userid' => 'Lastpost Userid',
            'lastpost_username' => 'Lastpost Username',
            'special_sort' => 'Special Sort',
            'reply_notice' => 'Reply Notice',
            'reply_topped' => 'Reply Topped',
            'thread_status' => 'Thread Status',
        ];
    }
}
