<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbProvensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-provensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_provensi')->textInput() ?>

    <?= $form->field($model, 'nama_provensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
