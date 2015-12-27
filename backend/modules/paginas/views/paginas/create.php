<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */

$this->title = Yii::t('app', 'Create Ja Paginas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ja Paginas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ja-paginas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'imagenUp' => $imagenUp
    ]) ?>

</div>
