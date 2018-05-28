<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ders Programı Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dersprogrami-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Programa Ders Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'programID',
            'ders_adi',
            'ders_hocasi',
            'ders_gunu',
            'ders_saati',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
