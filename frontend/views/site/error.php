<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

//TODO traducir textos a español pagina error
?>
<!-- BEGIN .full-block -->
<div class="full-block">

    <div class="ot-panel-block panel-light">
        <div class="error-big-message">

            <h1><?= Html::encode($this->title) ?></h1>
            <h2><?php echo nl2br(Html::encode($message)) ?></h2>

            <p>Sorry, This page is wanted by the police so it ran<br/>away to Antarctica. If You see it, please let us know.</p>
            <a href="<?php echo Yii::$app->homeUrl; ?>"><i class="fa fa-home"></i>Volver a Inicio</a>



        </div>
    </div>

    <!-- END .full-block -->
</div>