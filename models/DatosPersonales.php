<?php

namespace app\models;

use Yii;
use \app\models\base\DatosPersonales as BaseDatosPersonales;

/**
 * This is the model class for table "datos_personales".
 */
class DatosPersonales extends BaseDatosPersonales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['comunas_id'], 'required'],
            [['comunas_id', 'edad', 'tiempo_vive_comunidad'], 'integer'],
            [['fecha_vive_comunidad'], 'safe'],
            [['nac', 'cedula', 'primer_apellido', 'segundo_apellido', 'primer_nombre', 'segundo_nombre', 'fecha_nacimiento'], 'string', 'max' => 45],
            [['sexo'], 'string', 'max' => 1]
        ]);
    }
	
}
