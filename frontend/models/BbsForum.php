<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%bbs_forum}}".
 *
 * @property integer $fid
 * @property integer $parentid
 * @property string $type
 * @property integer $issub
 * @property integer $hassub
 * @property string $name
 * @property string $descrip
 * @property integer $vieworder
 * @property integer $across
 * @property string $manager
 * @property string $uppermanager
 * @property string $icon
 * @property string $logo
 * @property string $fup
 * @property string $fupname
 * @property integer $isshow
 * @property integer $isshowsub
 * @property integer $newtime
 * @property string $password
 * @property string $allow_visit
 * @property string $allow_read
 * @property string $allow_post
 * @property string $allow_reply
 * @property string $allow_upload
 * @property string $allow_download
 * @property integer $created_time
 * @property string $created_username
 * @property integer $created_userid
 * @property integer $created_ip
 * @property string $style
 */
class BbsForum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bbs_forum}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentid', 'issub', 'hassub', 'vieworder', 'across', 'isshow', 'isshowsub', 'newtime', 'created_time', 'created_userid', 'created_ip'], 'integer'],
            [['type', 'descrip'], 'string'],
            [['name', 'manager', 'uppermanager', 'fupname', 'allow_visit', 'allow_read', 'allow_post', 'allow_reply', 'allow_upload', 'allow_download'], 'string', 'max' => 255],
            [['icon', 'logo'], 'string', 'max' => 100],
            [['fup'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 32],
            [['created_username'], 'string', 'max' => 15],
            [['style'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fid' => 'Fid',
            'parentid' => 'Parentid',
            'type' => 'Type',
            'issub' => 'Issub',
            'hassub' => 'Hassub',
            'name' => 'Name',
            'descrip' => 'Descrip',
            'vieworder' => 'Vieworder',
            'across' => 'Across',
            'manager' => 'Manager',
            'uppermanager' => 'Uppermanager',
            'icon' => 'Icon',
            'logo' => 'Logo',
            'fup' => 'Fup',
            'fupname' => 'Fupname',
            'isshow' => 'Isshow',
            'isshowsub' => 'Isshowsub',
            'newtime' => 'Newtime',
            'password' => 'Password',
            'allow_visit' => 'Allow Visit',
            'allow_read' => 'Allow Read',
            'allow_post' => 'Allow Post',
            'allow_reply' => 'Allow Reply',
            'allow_upload' => 'Allow Upload',
            'allow_download' => 'Allow Download',
            'created_time' => 'Created Time',
            'created_username' => 'Created Username',
            'created_userid' => 'Created Userid',
            'created_ip' => 'Created Ip',
            'style' => 'Style',
        ];
    }

    /**
     * @inheritdoc
     * @return BbsForumQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BbsForumQuery(get_called_class());
    }
}
