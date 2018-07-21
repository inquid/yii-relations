<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Comunas */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Comunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comunas-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Comunas'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'nombre',
        'cod_situr',
        'rif',
        'tipo_comuna',
        'numero_consejos_comunales',
        'parroquia',
        'sector',
        'direccion',
        'telefono',
        'correo',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerDatosPersonales->totalCount){
    $gridColumnDatosPersonales = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                'nac',
        'cedula',
        'primer_apellido',
        'segundo_apellido',
        'primer_nombre',
        'segundo_nombre',
        'sexo',
        'fecha_nacimiento',
        'edad',
        'fecha_vive_comunidad',
        'tiempo_vive_comunidad',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDatosPersonales,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Datos Personales'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnDatosPersonales
    ]);
}
?>
    </div>
</div>
