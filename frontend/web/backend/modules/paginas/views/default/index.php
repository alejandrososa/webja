<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ja Paginas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ja-paginas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ja Paginas'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo:ntext',
            'contenido:ntext',
            'imagen',
            'categoria',
            // 'leermas:ntext',
            // 'estado',
            // 'tipo',
            // 'autor',
            // 'padre',
            // 'slug:ntext',
            // 'meta_descripcion:ntext',
            // 'meta_palabras:ntext',
            // 'meta_titulo',
            // 'fecha_creado',
            // 'fecha_modificado',
            // 'configuracion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
