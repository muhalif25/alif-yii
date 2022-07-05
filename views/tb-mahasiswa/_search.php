<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mahasiswa') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama_mahasiswa') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?= $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
