<?php
/**
 * Created by PhpStorm.
 * User: alejandro.sosa
 * Date: 30/12/2015
 * Time: 16:07
 */

namespace common\extensions;


use yii\web\ErrorAction;
use yii\helpers\Url;

class AppErrorAction extends ErrorAction
{
    public function init(){
        parent::init();

        $layout = 'invitados';
        if (!\Yii::$app->user->isGuest) {
            $layout = 'main';
        }
        $this->controller->layout = $layout;
        if (\Yii::$app->user->isGuest) {
            //$this->controller->redirect(Url::to(['login']));
        }
    }

    public function runt(){
        parent::run();
    }

}