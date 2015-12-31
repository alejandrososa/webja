<?php

namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use common\models\User;

/**
 * Checks if user group matches
 */
class UserGroupRule extends Rule {

    public $name = 'userGroup';

    public function execute($user, $item, $params) {
        if (!Yii::$app->user->isGuest) {
            $group = Yii::$app->user->identity->tipo;
            if ($item->name === 'admin') {
                return $group == User::ES_ADMIN;
            } elseif ($item->name === 'autor') {
                return $group == User::ES_AUTOR;
            }elseif($item->name === 'visita'){
                return $group == User::ES_VISITA;
            }
        }
        return false;
    }

}
