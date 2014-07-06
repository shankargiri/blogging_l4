<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 5/30/14
 * Time: 10:38 PM
 */

namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class LoginForm extends  FormValidator{
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];
} 