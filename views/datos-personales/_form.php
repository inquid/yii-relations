<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonales */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="datos-personales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

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

    <?= $form->field($model, 'segundo_apellido')->textInput(['maxlength' => true, 'placeholder' => 'Segundo Apellido']) ?>

    <?= $form->field($model, 'primer_nombre')->textInput(['maxlength' => true, 'placeholder' => 'Primer Nombre']) ?>

    <?= $form->field($model, 'segundo_nombre')->textInput(['maxlength' => true, 'placeholder' => 'Segundo Nombre']) ?>

    <?= $form->field($model, 'sexo')->checkbox() ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput(['maxlength' => true, 'placeholder' => 'Fecha Nacimiento']) ?>

    <?= $form->field($model, 'edad')->textInput(['placeholder' => 'Edad']) ?>

    <?= $form->field($model, 'fecha_vive_comunidad')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Fecha Vive Comunidad',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'tiempo_vive_comunidad')->textInput(['placeholder' => 'Tiempo Vive Comunidad']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
