<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ja-paginas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria')->textInput() ?>

    <?= $form->field($model, 'leermas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'publicado' => 'Publicado', 'pendiente' => 'Pendiente', 'programado' => 'Programado', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'pagina' => 'Pagina', 'articulo' => 'Articulo', 'portada' => 'Portada', 'contacto' => 'Contacto', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'autor')->textInput() ?>

    <?= $form->field($model, 'padre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_palabras')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_creado')->textInput() ?>

    <?= $form->field($model, 'fecha_modificado')->textInput() ?>

    <?= $form->field($model, 'configuracion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
