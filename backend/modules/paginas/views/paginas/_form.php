<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use karpoff\icrop\CropImageUpload;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */
/* @var $form yii\widgets\ActiveForm */

//$this->registerJs('@web/js/core/demo/DemoFormComponents.js', $this::POS_END);
//$this->registerJsFile('@web/js/core/demo/DemoFormComponents.js', ['position' => \yii\web\View::POS_END]);
$this->registerJsFile('@web/js/core/demo/DemoFormEditors.js', ['depends' => [\backend\assets\BackendAsset::className()]]);
$this->registerJsFile('@web/js/core/demo/DemoFormComponents.js', ['depends' => [\backend\assets\BackendAsset::className()]]);
//$this->registerJsFile('@web/js/core/demo/DemoFormComponents.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('@web/js/core/demo/DemoFormComponents.js', [], 'type');

?>


<?php $form = ActiveForm::begin([
    'options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'enviarForm'
    ],
]); ?>

<!-- BEGIN CONTENIDO -->
<div class="row">
    <div class="col-lg-12">
        <h4>Información General</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Utiliza este apartado para establecer un título y subtítulo a tu página de inicio. Recuerda que es muy importante que el usuario se sienta identificado con lo que está buscanso, por ello te recomendamos utilizar títulos descriptivos.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <?= $form->field($model, 'titulo')->textInput() ?>
                <?= $form->field($model, 'contenido')->textarea(['class' => 'form-control misummernote']) ?>
                <?= $form->field($model, 'leermas')->textarea(['class' => 'form-control']) ?>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Autocomplete from jQuery and Typeahead</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END CONTENIDO -->

<!-- BEGIN FILE UPLOAD --
<div class="row">
    <div class="col-lg-12">
        <h4>File upload</h4>
    </div><!--end .col --
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                This file uploader (Dropzone) can handle multiple files, gives previews of images, has drag and drop support and is easy to implement.
            </p>
        </article>
    </div><!--end .col --
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-head style-primary">
                <header>Drag and drop uploader</header>
            </div>
            <div class="card-body no-padding">
                <form action="../../html/forms/advanced.html" class="dropzone" id="my-awesome-dropzone">
                    <div class="dz-message">
                        <h3>Drop files here or click to upload.</h3>
                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                    </div>
                </form>
            </div><!--end .card-body --
        </div><!--end .card --
        <em class="text-caption">Dropzone file upload</em>
    </div><!--end .col --
</div><!--end .row -->
<!-- END FILE UPLOAD -->

<!-- BEGIN ESTADO -->
<div class="row">
    <div class="col-lg-12">
        <h4>Estado</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Utiliza este apartado para establecer un título y subtítulo a tu página de inicio. Recuerda que es muy importante que el usuario se sienta identificado con lo que está buscanso, por ello te recomendamos utilizar títulos descriptivos.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <?= $form->field($model, 'estado')->dropDownList([ 'publicado' => 'Publicado', 'pendiente' => 'Pendiente', 'programado' => 'Programado', ], ['prompt' => '']) ?>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Autocomplete from jQuery and Typeahead</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END ESTADO -->

<!-- BEGIN SEO -->
<div class="row">
    <div class="col-lg-12">
        <h4>SEO</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <ul class="list-divided">
                <li>Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</li>
                <li>Use a <code>&lt;select multiple/&gt;</code> as your input element for a tags input, to gain true multivalue support. Instead of a comma separated string, the values will be set in an array.</li>
            </ul>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">

                <?= $form->field($model, 'meta_titulo')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'slug')->textInput() ?>
                <?= $form->field($model, 'meta_descripcion')->textInput() ?>
                <?= $form->field($model, 'meta_palabras')->textInput(['data-role' => 'tagsinput']) ?>
                <?= $form->field($model, 'fecha_creado')->textInput() ?>
                <?= $form->field($model, 'fecha_modificado')->textInput() ?>

            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Tags input for input and select</em>
    </div><!--end .col -->
</div><!--end .row -->


<?php //= $form->field($model, 'imagen')->widget(CropImageUpload::className()) ?>



<div class="form-group">
        <?php Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn ink-reaction btn-raised btn-primary btn-loading-state btn btn-success' : 'btn ink-reaction btn-raised btn-primary btn-loading-state btn btn-primary',
        'data-loading-text' => "Guardando..."]) ?>


    </div>

    <?php ActiveForm::end(); ?>
