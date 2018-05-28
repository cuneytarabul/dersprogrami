<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\DersProgrami\models\Dersprogrami */

$this->title = 'Ders Programını Güncelle: ' . $model->ders_adi;
$this->params['breadcrumbs'][] = ['label' => 'Ders Programı Listesi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ders_adi, 'url' => ['view', 'id' => $model->programID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dersprogrami-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
