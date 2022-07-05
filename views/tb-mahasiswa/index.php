<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbMahasiswa;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mahasiswa',
            'nim',
            'nama_mahasiswa',
            'jurusan',
            'jk',
            //'agama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbMahasiswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                 }
            ],
        ],
    ]); ?>


</div>
