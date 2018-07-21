<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "datos_personales".
 *
 * @property integer $id
 * @property integer $comunas_id
 * @property string $nac
 * @property string $cedula
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property integer $sexo
 * @property string $fecha_nacimiento
 * @property integer $edad
 * @property string $fecha_vive_comunidad
 * @property integer $tiempo_vive_comunidad
 *
 * @property \app\models\Comunas $comunas
 */
class DatosPersonales extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'comunas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comunas_id'], 'required'],
            [['comunas_id', 'edad', 'tiempo_vive_comunidad'], 'integer'],
            [['fecha_vive_comunidad'], 'safe'],
            [['nac', 'cedula', 'primer_apellido', 'segundo_apellido', 'primer_nombre', 'segundo_nombre', 'fecha_nacimiento'], 'string', 'max' => 45],
            [['sexo'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datos_personales';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comunas_id' => 'Comunas ID',
            'nac' => 'Nac',
            'cedula' => 'Cedula',
            'primer_apellido' => 'Primer Apellido',
            'segundo_apellido' => 'Segundo Apellido',
            'primer_nombre' => 'Primer Nombre',
            'segundo_nombre' => 'Segundo Nombre',
            'sexo' => 'Sexo',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'edad' => 'Edad',
            'fecha_vive_comunidad' => 'Fecha Vive Comunidad',
            'tiempo_vive_comunidad' => 'Tiempo Vive Comunidad',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComunas()
    {
        return $this->hasOne(\app\models\Comunas::className(), ['id' => 'comunas_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\DatosPersonalesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DatosPersonalesQuery(get_called_class());
    }
}
