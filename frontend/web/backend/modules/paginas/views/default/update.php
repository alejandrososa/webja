<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ja Paginas',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ja Paginas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ja-paginas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
