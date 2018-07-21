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
        <div class="col-sm-3" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . 'PDF', 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => 'Will open the generated PDF file in a new window'
                ]
            )?>
            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'comunas.nombre',
            'label' => 'Comunas',
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
    <div class="row">
        <h4>Comunas<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnComunas = [
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
        'model' => $model->comunas,
        'attributes' => $gridColumnComunas    ]);
    ?>
</div>
