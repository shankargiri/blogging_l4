<?php

class Job extends \Eloquent {
	protected $fillable = [];

    public static function validate($input){
        $rules = array(
            'jobtype' => 'required',
            'title' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        );

        return Validator::make($input, $rules);
    }
}