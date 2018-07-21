<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DatosPersonales;

/**
 * app\models\DatosPersonalesSearch represents the model behind the search form about `app\models\DatosPersonales`.
 */
 class DatosPersonalesSearch extends DatosPersonales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'comunas_id', 'edad', 'tiempo_vive_comunidad'], 'integer'],
            [['nac', 'cedula', 'primer_apellido', 'segundo_apellido', 'primer_nombre', 'segundo_nombre', 'sexo', 'fecha_nacimiento', 'fecha_vive_comunidad'], 'safe'],
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
        $query = DatosPersonales::find();

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
            'comunas_id' => $this->comunas_id,
            'edad' => $this->edad,
            'fecha_vive_comunidad' => $this->fecha_vive_comunidad,
            'tiempo_vive_comunidad' => $this->tiempo_vive_comunidad,
        ]);

        $query->andFilterWhere(['like', 'nac', $this->nac])
            ->andFilterWhere(['like', 'cedula', $this->cedula])
            ->andFilterWhere(['like', 'primer_apellido', $this->primer_apellido])
            ->andFilterWhere(['like', 'segundo_apellido', $this->segundo_apellido])
            ->andFilterWhere(['like', 'primer_nombre', $this->primer_nombre])
            ->andFilterWhere(['like', 'segundo_nombre', $this->segundo_nombre])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'fecha_nacimiento', $this->fecha_nacimiento]);

        return $dataProvider;
    }
}
