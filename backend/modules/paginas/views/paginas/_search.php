<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PaginasBuscador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ja-paginas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'contenido') ?>

    <?= $form->field($model, 'imagen') ?>

    <?= $form->field($model, 'categoria') ?>

    <?php // echo $form->field($model, 'leermas') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'autor') ?>

    <?php // echo $form->field($model, 'padre') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'meta_descripcion') ?>

    <?php // echo $form->field($model, 'meta_palabras') ?>

    <?php // echo $form->field($model, 'meta_titulo') ?>

    <?php // echo $form->field($model, 'fecha_creado') ?>

    <?php // echo $form->field($model, 'fecha_modificado') ?>

    <?php // echo $form->field($model, 'configuracion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
