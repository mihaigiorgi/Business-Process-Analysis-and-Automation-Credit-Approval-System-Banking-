<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Clienti $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clienti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nume_si_Prenume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Adresa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Venit_Lunar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Suma_Solicitata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Durata_Creditului')->textInput() ?>

    <?= $form->field($model, 'Scopul_Creditului')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Tipul_Creditului')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data_Solicitarii')->textInput() ?>

    <?= $form->field($model, 'Rata_Dobanzii')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
