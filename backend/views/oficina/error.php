<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->params['breadcrumbs'][] = $code;

$clase = isset($code) && $code == "404" ? 'fa fa-search-minus text-primary' : 'fa fa-exclamation-circle text-danger';
?>


<!-- BEGIN 500 MESSAGE -->
    <div class="section-body contain-lg">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php  Html::encode($this->title) ?>
                <h1><span class="text-xxxl text-light"><?php echo $code; ?>  <i class="<?php echo $clase; ?>"></i></span></h1>
                <h2 class="text-light"><?= nl2br(Html::encode($message)) ?></h2>
            </div><!--end .col -->
        </div><!--end .row -->
    </div><!--end .section-body -->
