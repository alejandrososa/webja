<?php

namespace app\rbac;

use Yii;
use yii\rbac\Rule;
use app\models\User;

/**
 * Checks if user group matches
 */
class UserGroupRule extends Rule {

    public $name = 'userGroup';

    public function execute($user, $item, $params) {
        if (!Yii::$app->user->isGuest) {
            $group = Yii::$app->user->identity->user_type;
            if ($item->name === 'admin') {
                return $group == User::IS_ADMIN;
            } elseif ($item->name === 'gestor') {
                return $group == User::IS_GESTOR || $group == User::IS_ADMIN;
            }elseif($item->name === 'editor'){
                return $group == User::IS_ITNOW || $group == User::IS_ADMIN;
            }
        }
        return false;
    }

}
