<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbKota */

$this->title = 'Create Tb Kota';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
