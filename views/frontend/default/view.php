<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\DersProgrami\models\Dersprogrami */

$this->title = $model->programID;
$this->params['breadcrumbs'][] = ['label' => 'Ders Programı Listesi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dersprogrami-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->programID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->programID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'programID',
            'ders_adi',
            'ders_hocasi',
            'ders_gunu',
            'ders_saati',
        ],
    ]) ?>

</div>
