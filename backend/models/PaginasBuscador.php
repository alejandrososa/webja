<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\JaPaginas;

/**
 * PaginasBuscador represents the model behind the search form about `common\models\JaPaginas`.
 */
class PaginasBuscador extends JaPaginas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'categoria', 'autor', 'padre'], 'integer'],
            [['titulo', 'contenido', 'imagen', 'leermas', 'estado', 'tipo', 'slug', 'meta_descripcion', 'meta_palabras', 'meta_titulo', 'fecha_creado', 'fecha_modificado', 'configuracion'], 'safe'],
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
        $query = JaPaginas::find()
            ->filterWhere(['not', ['categoria' => 0]])
            ->andFilterWhere(['not', ['categoria' => 1]]);

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
            'categoria' => $this->categoria,
            'autor' => $this->autor,
            'padre' => $this->padre,
            'fecha_creado' => $this->fecha_creado,
            'fecha_modificado' => $this->fecha_modificado,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'contenido', $this->contenido])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'leermas', $this->leermas])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'meta_descripcion', $this->meta_descripcion])
            ->andFilterWhere(['like', 'meta_palabras', $this->meta_palabras])
            ->andFilterWhere(['like', 'meta_titulo', $this->meta_titulo])
            ->andFilterWhere(['like', 'configuracion', $this->configuracion]);

        return $dataProvider;
    }
}
