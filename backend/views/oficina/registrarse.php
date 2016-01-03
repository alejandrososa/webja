<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

//TODO - Acento en parrafo sale mal

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrarse';
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

                <p><?php  echo Yii::t('app', 'En segundos estaras publicando contenido completando estos campos:'); ?></p>


                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Registrarse', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div><!--end .col -->
            <div class="col-sm-5 col-sm-offset-1 text-center">
                <br><br>
                <h3 class="text-light"><?php echo Yii::t('app', 'Accede con tus redes sociales'); ?></h3>
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