<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use karpoff\icrop\CropImageUpload;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model common\models\JaPaginas */
/* @var $form yii\widgets\ActiveForm */

//$this->registerJsFile('@web/js/main.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('@web/js/core/demo/DemoFormComponents.js', [], 'type');

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














<!-- BEGIN INTRO -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-primary">Advanced form components</h1>
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

<!-- BEGIN AUTOCOMPLETE -->
<div class="row">
    <div class="col-lg-12">
        <h4>Autocomplete</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Autocomplete inputs give you search options while typing.
                You can use either the autocomplete from Typeahead or jQuery, whichever you prefer.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <input type="text" id="autocomplete1" class="form-control" data-source="../../html/forms/data/countries.json.html" placeholder="Countries">
                        <label>Autocomplete (Typeahead)</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="autocomplete2" class="form-control" data-source="data/countries.json" placeholder="Countries">
                        <label>Autocomplete (jQuery)</label>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Autocomplete from jQuery and Typeahead</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END AUTOCOMPLETE -->

<!-- BEGIN COLORPICKER -->
<div class="row">
    <div class="col-lg-12">
        <h4>Colorpickers</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                When you need a certain color, colorpickers can be useful.
                Just pick a color, and your input recieves the correct hex or rgb(a) color.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <input type="text"  id="cp1" class="form-control bscp" value="#8fff00">
                        <label>Colorpicker</label>
                    </div><!--end .form-group -->
                    <div class="form-group">
                        <div id="cp2" class="input-group colorpicker-component" data-color="rgb(10, 168, 158)" data-color-format="rgba">
                            <div class="input-group-content">
                                <input type="text" value="rgb(10, 168, 158)" readonly="" class="form-control">
                                <label>Colorpicker</label>
                            </div>
                            <div class="input-group-addon"><i style="background-color: rgb(10, 168, 158);"></i></div>
                        </div>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Colorpickers</em>
        <div class="card">
            <div class="card-body style-primary">
                <form class="form form-inverse">
                    <div class="form-group">
                        <div>
                            <input type="text" id="cp3" class="form-control" value="#c8e0df">
                            <label>Colorpicker</label>
                        </div>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Colorpickers</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END COLORPICKER -->

<!-- BEGIN DATEPICKERS -->
<div class="row">
    <div class="col-lg-12">
        <h4>Datepickers</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Datepickers provide a simple way to select a single date.
                Using these in your template helps ensure that a user's specification of a date input is valid and formatted correctly.
                Datepickers can be used as a dropdown on an input field but also inline on a form.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group control-width-normal">
                        <div class="input-group date" id="demo-date">
                            <div class="input-group-content">
                                <input type="text" class="form-control">
                                <label>Datepicker</label>
                            </div>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div><!--end .form-group -->
                    <div class="form-group control-width-normal">
                        <div class="input-group date" id="demo-date-month">
                            <div class="input-group-content">
                                <input type="text" class="form-control">
                                <label>Monthpicker</label>
                            </div>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div><!--end .form-group -->
                    <div class="form-group control-width-normal">
                        <div class="input-group date" id="demo-date-format">
                            <div class="input-group-content">
                                <input type="text" class="form-control">
                                <label>Datepicker</label>
                                <p class="help-block">yyyy/mm/dd</p>
                            </div>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Datepickers</em>
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <div class="input-daterange input-group" id="demo-date-range">
                            <div class="input-group-content">
                                <input type="text" class="form-control" name="start" />
                                <label>Date range</label>
                            </div>
                            <span class="input-group-addon">to</span>
                            <div class="input-group-content">
                                <input type="text" class="form-control" name="end" />
                                <div class="form-control-line"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Range datepicker</em>
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div id="demo-date-inline"></div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Inline datepicker</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END DATEPICKERS -->

<!-- BEGIN FILE UPLOAD -->
<div class="row">
    <div class="col-lg-12">
        <h4>File upload</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                This file uploader (Dropzone) can handle multiple files, gives previews of images, has drag and drop support and is easy to implement.
            </p>
        </article>
    </div><!--end .col -->
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
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Dropzone file upload</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END FILE UPLOAD -->

<!-- BEGIN MASKED INPUTS -->
<div class="row">
    <div class="col-lg-12">
        <h4>Masked inputs</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Storing properly formatted data is important.
                Masked inputs can help to accomplish this.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" data-inputmask="'alias': 'date'">
                        <label>Date mask</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" data-inputmask="'mask': 'y/m/d'">
                        <label>Date mask alt</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control time-mask">
                        <label>Time masks</label>
                        <p class="help-block">Time: 24h</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control time12-mask">
                        <label>Time masks alt</label>
                        <p class="help-block">Time: am/pm</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" data-inputmask="'mask': '(999) 999-9999'">
                        <label>Phone mask</label>
                        <p class="help-block">US Telephone: (999) 999-9999</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control dollar-mask">
                        <label>Dollar mask</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control euro-mask">
                        <label>Euro masks</label>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Masked inputs</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END MASKED INPUTS -->

<!-- BEGIN MULTI-SELECT -->
<div class="row">
    <div class="col-lg-12">
        <h4>Multi-select</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Use this multi-select to display the user multiple options.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <select id="optgroup" multiple="multiple">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option><option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option><option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Multi-select</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END MULTI-SELECT -->

<!-- BEGIN SELECT2 -->
<div class="row">
    <div class="col-lg-12">
        <h4>Select2 (Advanced select)</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <ul class="list-divided">
                <li>If you want the option filtering in a <code>&lt;select&gt;</code>, you only have to add the javascript code <code>$('select').select2();</code>.</li>
                <li>Select2 also supports multi-value select boxes. Just add the <code>multiple</code> attribute and Select2 automatically picks up on this.</li>
            </ul>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <select class="form-control select2-list" data-placeholder="Select an item">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                        <label>Select with option filtering</label>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2-list" data-placeholder="Select an item" multiple>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                        <label>Multi-Value select</label>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Select2</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END SELECT2 -->

<!-- BEGIN SLIDERS -->
<div class="row">
    <div class="col-lg-12">
        <h4>Sliders</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Sliders let users select a value from a continuous or discrete range of values by moving the slider thumb.
                Sliders can have the selected value on the side.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-content form-control-static">
                                <div id="slider-step"></div>
                            </div>
                            <div class="input-group-addon" id="step-value">100</div>
                        </div>
                    </div><!--end .form-group -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-content form-control-static">
                                <div id="slider"></div>
                            </div>
                            <div class="input-group-addon" id="slider-value">50</div>
                        </div>
                    </div><!--end .form-group -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon" id="range-value1">25</div>
                            <div class="input-group-content form-control-static">
                                <div id="slider-range"></div>
                            </div>
                            <div class="input-group-addon" id="range-value2">75</div>
                        </div>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Vertical sliders</em>
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div id="eq">
                                <span>88</span>
                                <span>77</span>
                                <span>55</span>
                                <span>33</span>
                                <span>40</span>
                                <span>45</span>
                                <span>70</span>
                            </div>
                        </div>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Horizontal sliders</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END SLIDERS -->

<!-- BEGIN SPINNERS -->
<div class="row">
    <div class="col-lg-12">
        <h4>Spinners</h4>
    </div><!--end .col -->
    <div class="col-lg-3 col-md-4">
        <article class="margin-bottom-xxl">
            <p>
                Spinners are similar to combo boxes and lists in that they let the user choose from a range of values.
                Like editable combo boxes, spinners allow the user to type in a value.
                They are often used when the set of possible values is extremely large.
            </p>
        </article>
    </div><!--end .col -->
    <div class="col-lg-offset-1 col-md-8">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="spinner" value="19"/>
                        <label>Age</label>
                        <p class="help-block">Must be over 16</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="spinner-decimal" value="0.96"/>
                        <label>Opacity</label>
                    </div>
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Spinners</em>
    </div><!--end .col -->
</div><!--end .row -->
<!-- END SPINNERS -->

<!-- BEGIN TAGS INPUT -->
<div class="row">
    <div class="col-lg-12">
        <h4>Tags input</h4>
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
                <form class="form">
                    <div class="form-group">
                        <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
                        <label>Tagsinput for input</label>
                    </div><!--end .form-group -->
                    <div class="form-group">
                        <select multiple data-role="tagsinput">
                            <option value="Amsterdam">Amsterdam</option>
                            <option value="Washington">Washington</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Beijing">Beijing</option>
                            <option value="Cairo">Cairo</option>
                        </select>
                        <label>Tagsinput for select</label>
                    </div><!--end .form-group -->
                </form>
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Tags input for input and select</em>
    </div><!--end .col -->
</div><!--end .row -->
