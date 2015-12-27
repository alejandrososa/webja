<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use karpoff\icrop\CropImageUpload;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="ja-paginas-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= $form->field($model, 'titulo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagen')->widget(CropImageUpload::className()) ?>

    <?= $form->field($model, 'categoria')->dropDownList(
        $model->getListadoTiposArticulos(),['prompt'=>'Seleccionar categoria']
    ) ?>

    <?= $form->field($model, 'leermas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'publicado' => 'Publicado', 'pendiente' => 'Pendiente', 'programado' => 'Programado', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'pagina' => 'Pagina', 'articulo' => 'Articulo', 'portada' => 'Portada', 'contacto' => 'Contacto', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'autor')->dropDownList(
        $model->getListadoAutores(),['prompt'=>'Seleccionar autor']
    ) ?>

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
