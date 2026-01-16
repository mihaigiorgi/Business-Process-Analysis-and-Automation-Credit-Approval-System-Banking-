<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Clienti $model */

$this->title = 'Create Clienti';
$this->params['breadcrumbs'][] = ['label' => 'Clienti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
