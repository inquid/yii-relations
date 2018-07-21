<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComunasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-comunas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'placeholder' => 'Nombre']) ?>

    <?= $form->field($model, 'cod_situr')->textInput(['maxlength' => true, 'placeholder' => 'Cod Situr']) ?>

    <?= $form->field($model, 'rif')->textInput(['maxlength' => true, 'placeholder' => 'Rif']) ?>

    <?= $form->field($model, 'tipo_comuna')->textInput(['maxlength' => true, 'placeholder' => 'Tipo Comuna']) ?>

    <?php /* echo $form->field($model, 'numero_consejos_comunales')->textInput(['placeholder' => 'Numero Consejos Comunales']) */ ?>

    <?php /* echo $form->field($model, 'parroquia')->textInput(['maxlength' => true, 'placeholder' => 'Parroquia']) */ ?>

    <?php /* echo $form->field($model, 'sector')->textInput(['maxlength' => true, 'placeholder' => 'Sector']) */ ?>

    <?php /* echo $form->field($model, 'direccion')->textInput(['maxlength' => true, 'placeholder' => 'Direccion']) */ ?>

    <?php /* echo $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono']) */ ?>

    <?php /* echo $form->field($model, 'correo')->textInput(['maxlength' => true, 'placeholder' => 'Correo']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
