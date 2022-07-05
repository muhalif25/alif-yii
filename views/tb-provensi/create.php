<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbProvensi */

$this->title = 'Create Tb Provensi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Provensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-provensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
