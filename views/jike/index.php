<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use shiyang\webuploader\MultiImage;
?>

<?/*=Html::encode($user)*/?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name')->label('自定义 Name')->textInput(['style'=>'width:200px;'])?>
<?= $form->field($model,'pass')->passwordInput(['style'=>'width:200px;'])?>
<?= $form->field($model,'email')->textInput(['style'=>'width:200px;'])?>
<?= $form->field($model,'sex')->radioList(['1'=>'男','2'=>'女'])?>
<?= $form->field($model,'edu')->dropDownList(['1'=>'大学','2'=>'中学','3'=>'小学'],['style'=>'width:200px;']) ?>
<?= $form->field($model,'hobby')->checkboxList(['篮球'=>'篮球','足球'=>'足球'])?>
<?= $form->field($model,'blog')->textInput(['style'=>'width:500px;']) ?>
<?= $form->field($model,'info')->textarea(['rows'=>3,'style'=>'width:500px;'])?>

<div class="active">
    <?= Html::submitButton('Submit',['class'=>'btn btn-bth-primary','style'=>'background:#FFCC22;']) ?>
</div>
<?php $form = ActiveForm::end(); ?>
