<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\JikeForm;

class JikeController extends Controller{
    public function actionIndex(){
        //var_dump($_REQUEST);exit;
        $model = new JikeForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('index-confirm', ['model' => $model]);
        } else {
            return $this->render('index',[
                'model'=>$model,
            ]);
        }

    }
}
