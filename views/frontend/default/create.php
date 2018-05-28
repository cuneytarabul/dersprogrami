<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\DersProgrami\models\Dersprogrami */

$this->title = 'Ders Programı Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Ders Programı', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dersprogrami-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
