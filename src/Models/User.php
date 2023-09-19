<?php
namespace App\Models;

class User extends Model{
    public static $table = 'articles';
    public $id;
    public $email;
    public $password;
}