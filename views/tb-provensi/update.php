<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbProvensi */

$this->title = 'Update Tb Provensi: ' . $model->id_provensi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Provensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_provensi, 'url' => ['view', 'id_provensi' => $model->id_provensi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-provensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
