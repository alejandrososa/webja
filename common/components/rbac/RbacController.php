<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

//namespace common\commands;
namespace frontend\controllers;

use Yii;
use yii\console\Controller;
use common\extensions\UserGroupRule;

/**
 * Rbac Controller. 
 */
class RbacController extends Controller {

    /**
     * @var string Default action
     */
    public $defaultAction = 'init';
    
    /**
     * Create RBAC rules
     */
    public function actionInit() {
         
        /* @var $auth \yii\rbac\DbManager */
        $auth = \Yii::$app->authManager;
        $auth->removeAll();

        $rule = new UserGroupRule();
        $auth->add($rule);
        
        $admin = $auth->createRole('admin');
        $admin->ruleName = $rule->name;
        $auth->add($admin);
       
        $gestor = $auth->createRole('autor');
        $gestor->ruleName = $rule->name;
        $auth->add($gestor);

        $itnow = $auth->createRole('visita');
        $itnow->ruleName = $rule->name;
        $auth->add($itnow);
    }

}