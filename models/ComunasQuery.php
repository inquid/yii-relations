<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Comunas]].
 *
 * @see Comunas
 */
class ComunasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Comunas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Comunas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
