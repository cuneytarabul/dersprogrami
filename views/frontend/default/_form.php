<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\DersProgrami\models\Dersprogrami */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dersprogrami-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ders_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ders_hocasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ders_gunu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ders_saati')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
