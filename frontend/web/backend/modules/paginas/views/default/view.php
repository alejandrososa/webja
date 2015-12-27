<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ja Paginas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ja-paginas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo:ntext',
            'contenido:ntext',
            'imagen',
            'categoria',
            'leermas:ntext',
            'estado',
            'tipo',
            'autor',
            'padre',
            'slug:ntext',
            'meta_descripcion:ntext',
            'meta_palabras:ntext',
            'meta_titulo',
            'fecha_creado',
            'fecha_modificado',
            'configuracion:ntext',
        ],
    ]) ?>

</div>
