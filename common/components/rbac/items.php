<?php
/**
 * Created by PhpStorm.
 * User: alejandro.sosa
 * Date: 30/12/2015
 * Time: 17:57
 */
return [
    'dashboard' => [
        'type' => 2,
        'description' => 'asdfasdfadsf',
    ],
    'user' => [
        'type' => 1,
        'description' => 'asdfasdf',
        'ruleName' => 'userRole',
    ],
    'moder' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'user',
            'dashboard',
        ],
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'moder',
        ],
    ],
];