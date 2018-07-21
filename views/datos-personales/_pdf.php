<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonales */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datos Personales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-personales-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Datos Personales'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'comunas.nombre',
                'label' => 'Comunas'
            ],
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
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
