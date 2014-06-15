<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 5/30/14
 * Time: 1:45 PM
 */

namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class ReplyForm extends FormValidator{

    protected $rules = [
        'reply' => 'required'
    ];

} 