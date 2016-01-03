<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */

$this->title = Yii::t('app', '{modelClass} ', ['modelClass' => 'Portada',]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Paginas'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Portada');
?>
<div class="section-body contain-lg">

    <!-- BEGIN INTRO -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-primary"><?= Html::encode($this->title) ?></h1>
        </div><!--end .col -->
        <div class="col-lg-8">
            <article class="margin-bottom-xxl">
                <p class="lead">
                When you are developing an Admin Template, it's always handy to have more than the standard toolset the browser gives you.
                That's why Material Admin provides advanced components styled to fit well inside the Material Design philosophy.
                </p>
            </article>
        </div><!--end .col -->
    </div><!--end .row -->
    <!-- END INTRO -->

    <?= $this->render('_form', [
        'model' => $model,
        'imagenUp' => $imagenUp
    ]) ?>

</div>
