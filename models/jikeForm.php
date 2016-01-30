<?php
namespace app\models;
use Yii;
use yii\base\Model;
class JikeForm extends Model{
    public  $name;
    public  $pass;
    public  $email;
    public  $sex;
    public  $edu;
    public  $hobby;
    public  $blog;
    public  $info;

    public function rules(){
        return [
            [['name','pass','email','sex','edu','hobby','blog','info'],'required'],
            ['email','email','message'=>'这里必须是邮箱'],
            ['name','string','length'=>[2,10]],
            ['blog','url','defaultScheme'=>'http','message'=>'请正确填写博客地址']
        ];
    }

    public function attributeLabels(){
        return [
            'name'=>'姓名',
            'pass'=>'密码',
            'email'=>'邮箱',
            'sex'=>'性别',
            'edu'=>'学历',
            'hobby'=>'爱好',
            'blog'=>'博客',
            'info'=>'个人简介'
        ];
    }
}
?>