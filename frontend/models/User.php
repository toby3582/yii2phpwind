<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qc_user".
 *
 * @property integer $uid
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $status
 * @property integer $groupid
 * @property integer $memberid
 * @property integer $regdate
 * @property string $realname
 * @property string $groups
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qc_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'status', 'groupid', 'memberid', 'regdate'], 'integer'],
            [['username'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 32],
            [['realname'], 'string', 'max' => 50],
            [['groups'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => '用户ID',
            'username' => '用户名字',
            'email' => 'Email地址',
            'password' => '随机密码',
            'status' => '状态',
            'groupid' => '当前用户组ID',
            'memberid' => '会员组ID',
            'regdate' => '注册时间',
            'realname' => '真实姓名',
            'groups' => '用户附加组的ID缓存字段',
        ];
    }
}
