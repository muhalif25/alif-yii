<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMahasiswa */

$this->title = $model->id_mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Tb Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_mahasiswa' => $model->id_mahasiswa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_mahasiswa' => $model->id_mahasiswa], [
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
            'id_mahasiswa',
            'nim',
            'nama_mahasiswa',
            'jurusan',
            'jk',
            'agama',
        ],
    ]) ?>

</div>
