<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comunas;

/**
 * app\models\ComunasSearch represents the model behind the search form about `app\models\Comunas`.
 */
 class ComunasSearch extends Comunas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'numero_consejos_comunales'], 'integer'],
            [['nombre', 'cod_situr', 'rif', 'tipo_comuna', 'parroquia', 'sector', 'direccion', 'telefono', 'correo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comunas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'numero_consejos_comunales' => $this->numero_consejos_comunales,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'cod_situr', $this->cod_situr])
            ->andFilterWhere(['like', 'rif', $this->rif])
            ->andFilterWhere(['like', 'tipo_comuna', $this->tipo_comuna])
            ->andFilterWhere(['like', 'parroquia', $this->parroquia])
            ->andFilterWhere(['like', 'sector', $this->sector])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'correo', $this->correo]);

        return $dataProvider;
    }
}
