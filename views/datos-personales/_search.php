<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-datos-personales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'comunas_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Comunas::find()->orderBy('id')->asArray()->all(), 'id', 'nombre'),
        'options' => ['placeholder' => 'Choose Comunas'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nac')->textInput(['maxlength' => true, 'placeholder' => 'Nac']) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true, 'placeholder' => 'Cedula']) ?>

    <?= $form->field($model, 'primer_apellido')->textInput(['maxlength' => true, 'placeholder' => 'Primer Apellido']) ?>

    <?php /* echo $form->field($model, 'segundo_apellido')->textInput(['maxlength' => true, 'placeholder' => 'Segundo Apellido']) */ ?>

    <?php /* echo $form->field($model, 'primer_nombre')->textInput(['maxlength' => true, 'placeholder' => 'Primer Nombre']) */ ?>

    <?php /* echo $form->field($model, 'segundo_nombre')->textInput(['maxlength' => true, 'placeholder' => 'Segundo Nombre']) */ ?>

    <?php /* echo $form->field($model, 'sexo')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'fecha_nacimiento')->textInput(['maxlength' => true, 'placeholder' => 'Fecha Nacimiento']) */ ?>

    <?php /* echo $form->field($model, 'edad')->textInput(['placeholder' => 'Edad']) */ ?>

    <?php /* echo $form->field($model, 'fecha_vive_comunidad')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Fecha Vive Comunidad',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'tiempo_vive_comunidad')->textInput(['placeholder' => 'Tiempo Vive Comunidad']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
