<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Comunas */

?>
<div class="comunas-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->nombre) ?></h2>
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
</div>