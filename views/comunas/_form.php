<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comunas */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'DatosPersonales', 
        'relID' => 'datos-personales', 
        'value' => \yii\helpers\Json::encode($model->datosPersonales),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="comunas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'placeholder' => 'Nombre']) ?>

    <?= $form->field($model, 'cod_situr')->textInput(['maxlength' => true, 'placeholder' => 'Cod Situr']) ?>

    <?= $form->field($model, 'rif')->textInput(['maxlength' => true, 'placeholder' => 'Rif']) ?>

    <?= $form->field($model, 'tipo_comuna')->textInput(['maxlength' => true, 'placeholder' => 'Tipo Comuna']) ?>

    <?= $form->field($model, 'numero_consejos_comunales')->textInput(['placeholder' => 'Numero Consejos Comunales']) ?>

    <?= $form->field($model, 'parroquia')->textInput(['maxlength' => true, 'placeholder' => 'Parroquia']) ?>

    <?= $form->field($model, 'sector')->textInput(['maxlength' => true, 'placeholder' => 'Sector']) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true, 'placeholder' => 'Direccion']) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true, 'placeholder' => 'Telefono']) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true, 'placeholder' => 'Correo']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('DatosPersonales'),
            'content' => $this->render('_formDatosPersonales', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->datosPersonales),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
