<?php
namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class CreateThread extends  FormValidator{
        protected  $rules = [
            'topic' => 'required'
        ];
} 