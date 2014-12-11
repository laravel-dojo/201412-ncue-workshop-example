<?php

class Comment extends \Eloquent {
    protected $table = 'comments';
    protected $fillable = [
        'name',
        'email',
        'content',
        'post_id',
    ];
    
    public function post()
    {
        return $this->belongsTo('Post');
    }
    
}