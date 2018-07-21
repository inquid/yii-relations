<div class="form-group" id="add-datos-personales">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'DatosPersonales',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'nac' => ['type' => TabularForm::INPUT_TEXT],
        'cedula' => ['type' => TabularForm::INPUT_TEXT],
        'primer_apellido' => ['type' => TabularForm::INPUT_TEXT],
        'segundo_apellido' => ['type' => TabularForm::INPUT_TEXT],
        'primer_nombre' => ['type' => TabularForm::INPUT_TEXT],
        'segundo_nombre' => ['type' => TabularForm::INPUT_TEXT],
        'sexo' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'fecha_nacimiento' => ['type' => TabularForm::INPUT_TEXT],
        'edad' => ['type' => TabularForm::INPUT_TEXT],
        'fecha_vive_comunidad' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Fecha Vive Comunidad',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'tiempo_vive_comunidad' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowDatosPersonales(' . $key . '); return false;', 'id' => 'datos-personales-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Datos Personales', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowDatosPersonales()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

