<?php

class Tag extends \Eloquent {
	protected $fillable = [];

    public function thread(){
        return $this->hasMany('Thread');
    }
}