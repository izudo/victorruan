<?php
/**
 * Created by PhpStorm.
 * User: victorruan
 * Date: 16/8/25
 * Time: 上午11:29
 */

namespace VictorRuan\app\models;


class User extends \ActiveRecord{
    public $table = 'users';
    public $primaryKey = 'id';
}