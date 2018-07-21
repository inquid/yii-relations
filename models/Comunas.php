<?php

namespace app\models;

use Yii;
use \app\models\base\Comunas as BaseComunas;

/**
 * This is the model class for table "comunas".
 */
class Comunas extends BaseComunas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['numero_consejos_comunales'], 'integer'],
            [['nombre', 'cod_situr', 'rif', 'tipo_comuna', 'parroquia', 'sector', 'direccion', 'telefono', 'correo'], 'string', 'max' => 45]
        ]);
    }
	
}
