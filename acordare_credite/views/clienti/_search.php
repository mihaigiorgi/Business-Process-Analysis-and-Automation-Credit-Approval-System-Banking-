<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ClientiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clienti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Nume_si_Prenume') ?>

    <?= $form->field($model, 'CNP') ?>

    <?= $form->field($model, 'Adresa') ?>

    <?= $form->field($model, 'Venit_Lunar') ?>

    <?php // echo $form->field($model, 'Suma_Solicitata') ?>

    <?php // echo $form->field($model, 'Durata_Creditului') ?>

    <?php // echo $form->field($model, 'Scopul_Creditului') ?>

    <?php // echo $form->field($model, 'Tipul_Creditului') ?>

    <?php // echo $form->field($model, 'Data_Solicitarii') ?>

    <?php // echo $form->field($model, 'Rata_Dobanzii') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
