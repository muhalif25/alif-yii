<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMahasiswa */

$this->title = 'Create Tb Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Tb Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
