<?php

namespace common\extensions;

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
            $group = Yii::$app->user->identity->user_type;
            if ($item->name === 'admin') {
                return $group == JaUsuarios::ES_ADMIN;
            } elseif ($item->name === 'autor') {
                return $group == JaUsuarios::ES_AUTOR;
            }elseif($item->name === 'visita'){
                return $group == JaUsuarios::ES_VISITA;
            }
        }
        return false;
    }

}
