<?php

class Eventadd extends \Eloquent {
	protected $fillable = ['event', 'venue', 'address', 'date'];


    public static function validate($input){
        $rules = array(
            'event' => 'required',
            'venue' => 'required',
            'address' => 'required',
            'date' => 'required',
            'zipcode' => 'required'
        );

        return Validator::make($input, $rules);

    }


    protected $table = 'events';
}