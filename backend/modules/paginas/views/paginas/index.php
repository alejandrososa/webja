<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PaginasBuscador */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Paginas');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?= Html::encode($this->title) ?></h2>
    </div>
    <div class="mdl-card__supporting-text">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>

    <!-- Colored FAB button with ripple -->
    <?php echo Html::a(Html::tag('i', 'add', ['class' => 'material-icons']),
        ['create'], ['id' => 'boton-crear', 'class' => 'boton-agregar mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored']);
    ?>
    <div class="mdl-tooltip" for="boton-crear">Agregar pagina</div>
</div>

<div class="mdl-grid demo-content">



<div class="ja-paginas-index mdl-cell mdl-cell--12-col mdl-grid">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Paginas'), ['create'], ['class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' =>['class' => 'mdl-data-table mdl-js-data-table mdl-shadow--2dp'], //mdl-data-table--selectable
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'label'=>'imagen',
                'format'=>'raw',
                'value' => function($data){
                    $url = '@frontend/web/imagenes/paginas/'.$data->imagen_cortada;
                    //return Html::img($url,['alt'=>'yii', 'width'=>90]);
                    return EasyThumbnailImage::thumbnailImg($url, 35, 20, EasyThumbnailImage::THUMBNAIL_OUTBOUND, ['alt' => $data->titulo]);
                }
            ],
            /*[
                'attribute' => 'id',
                'headerOptions' => ['width' => '80'],
            ],*/

            //'titulo:ntext',
            [
                'attribute' => 'titulo',
                //'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'mdl-data-table__cell--non-numeric']
            ],
            //'contenido:ntext',




           //'categorias.titulo',

            [
                'label' => Yii::t('app', 'Categoria'),
                'attribute' => 'categorias.titulo',
                //'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'mdl-data-table__cell--non-numeric'],
                //'filter' => Html::activeDropDownList($searchModel, 'categoria', $model->getListadoTiposArticulos,['class'=>'form-control','prompt' => 'Select Category'])
            ],
            [
                'label'=>'Ver',
                'format'=>'raw',
                'value' => function($data){
                    $url = "http://www.bsourcecode.com";
                    return Html::a('Go Link', $url, ['title' => 'Go']);
                }
            ],
            // 'leermas:ntext',
            // 'estado',
            // 'tipo',
            // 'autor',
            // 'padre',
            // 'slug:ntext',
            // 'meta_descripcion:ntext',
            // 'meta_palabras:ntext',
            // 'meta_titulo',
             'fecha_creado',
            // 'fecha_modificado',
            // 'configuracion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>