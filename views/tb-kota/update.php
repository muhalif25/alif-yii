<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbKota */

$this->title = 'Update Tb Kota: ' . $model->id_kota;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kota, 'url' => ['view', 'id_kota' => $model->id_kota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
