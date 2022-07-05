<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbKota */

$this->title = $model->id_kota;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-kota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kota' => $model->id_kota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kota' => $model->id_kota], [
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
            'id_kota',
            'nama_kota',
            'id_provensi',
        ],
    ]) ?>

</div>
