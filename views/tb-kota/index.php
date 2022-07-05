<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbKota;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TbKotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Kotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Kota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kota',
            'nama_kota',
            'id_provensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbKota $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kota' => $model->id_kota]);
                 }
            ],
        ],
    ]); ?>


</div>
