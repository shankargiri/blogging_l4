<?php

class Comment extends \Eloquent {
	protected $fillable = ['reply', 'thread_id'];

    protected $table = 'comments';
    public function threads(){
        $this->belongsTo('Thread', 'thread_id');
    }
}