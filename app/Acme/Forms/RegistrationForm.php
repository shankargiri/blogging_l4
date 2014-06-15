<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 5/30/14
 * Time: 10:08 PM
 */

namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator{
    protected $rules = [
        'username' => 'required|unique:users',
        'Email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];
} 