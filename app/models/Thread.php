<?php

class Thread extends \Eloquent {
	protected $fillable = ['topic'];

    public function comments(){
        return $this->hasMany('Comment');
    }

    public function tags(){
        return $this->belongsTo('Tag', 'tag_id');
    }
    public function user(){
        return $this->belongsTo('User');
    }
    public static function validate($input){
        $rules = array(
            'topic' => 'required'
        );

        return Validator::make($input, $rules);

    }
}