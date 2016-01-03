<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Acceso';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- style="background-image: url('../../assets/img/img16.jpg')" -->
<div class="img-backdrop"></div>
<div class="spacer"></div>
<div class="card contain-sm style-transparent">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <br/>
                <span class="text-lg text-bold text-primary"><?= Html::encode($this->title) ?></span>
                <br/><br/>

                <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class'=> 'class="form floating-label"']]); ?>

                    <?= $form->field($model, 'username')->textInput()->label('Usuario',
                        ['class' => '', 'maxlength' => '20', 'autofocus' => true, 'autocomplete' => false,]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>


                <div class="row">
                    <div class="col-xs-6 text-left">
                        <div class="checkbox checkbox-inline checkbox-styled">
                            <label>
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </label>
                        </div>
                    </div><!--end .col -->
                    <div class="col-xs-6 text-right">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-raised', 'name' => 'login-button']) ?>
                    </div><!--end .col -->
                </div><!--end .row -->


                <?php ActiveForm::end(); ?>


                <!--<form class="form floating-label" action="../../html/dashboards/dashboard.html" accept-charset="utf-8" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">Password</label>
                        <p class="help-block"><a href="#">Forgotten?</a></p>
                    </div>
                    <br/>

                </form>-->
            </div><!--end .col -->
            <div class="col-sm-5 col-sm-offset-1 text-center">
                <br><br>
                <h3 class="text-light"><?php echo Yii::t('app', 'No tiene cuenta todavia?'); ?></h3>
                <a class="btn btn-block btn-raised btn-primary" href="<?php echo Yii::$app->urlManager->createUrl(['oficina/registrarse']); ?>">
                    <?php echo Yii::t('app', 'Registrarse') ?>
                </a>
                <h3 class="text-light">
                    o
                </h3>
                <br>

                <p>
                    <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i><?php echo Yii::t('app', 'Acceder con Facebook'); ?></a>
                </p>
                <p>
                    <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i><?php echo Yii::t('app', 'Acceder con Twitter'); ?></a>
                </p>
            </div><!--end .col -->
        </div><!--end .row -->
    </div><!--end .card-body -->
</div><!--end .card -->