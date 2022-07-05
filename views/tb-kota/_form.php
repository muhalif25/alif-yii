<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbKota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-kota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_provensi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
