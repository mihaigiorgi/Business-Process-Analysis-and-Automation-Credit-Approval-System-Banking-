<?php

use app\models\Clienti;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ClientiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clienti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clienti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Nume_si_Prenume',
            'CNP',
            'Adresa:ntext',
            'Venit_Lunar',
            //'Suma_Solicitata',
            //'Durata_Creditului',
            //'Scopul_Creditului:ntext',
            //'Tipul_Creditului',
            //'Data_Solicitarii',
            //'Rata_Dobanzii',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clienti $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
