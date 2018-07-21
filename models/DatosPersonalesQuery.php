<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DatosPersonales]].
 *
 * @see DatosPersonales
 */
class DatosPersonalesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return DatosPersonales[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DatosPersonales|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
