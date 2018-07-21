<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "comunas".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $cod_situr
 * @property string $rif
 * @property string $tipo_comuna
 * @property integer $numero_consejos_comunales
 * @property string $parroquia
 * @property string $sector
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 *
 * @property \app\models\DatosPersonales[] $datosPersonales
 */
class Comunas extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'datosPersonales'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero_consejos_comunales'], 'integer'],
            [['nombre', 'cod_situr', 'rif', 'tipo_comuna', 'parroquia', 'sector', 'direccion', 'telefono', 'correo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comunas';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'cod_situr' => 'Cod Situr',
            'rif' => 'Rif',
            'tipo_comuna' => 'Tipo Comuna',
            'numero_consejos_comunales' => 'Numero Consejos Comunales',
            'parroquia' => 'Parroquia',
            'sector' => 'Sector',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatosPersonales()
    {
        return $this->hasMany(\app\models\DatosPersonales::className(), ['comunas_id' => 'id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\ComunasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ComunasQuery(get_called_class());
    }
}
