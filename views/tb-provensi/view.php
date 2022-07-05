<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbProvensi */

$this->title = $model->id_provensi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Provensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-provensi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_provensi' => $model->id_provensi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_provensi' => $model->id_provensi], [
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
            'id_provensi',
            'nama_provensi',
        ],
    ]) ?>

</div>
