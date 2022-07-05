<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbProvensi;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbProvensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Provensis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-provensi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Provensi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_provensi',
            'nama_provensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbProvensi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_provensi' => $model->id_provensi]);
                 }
            ],
        ],
    ]); ?>


</div>
