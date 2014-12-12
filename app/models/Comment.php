<?php

class Comment extends \Eloquent {
    protected $table = 'comments';
    protected $fillable = [
        'name',
        'email',
        'content',
        'post_id',
    ];
    
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'content' => 'required',
        'post_id' => 'required|exists:posts,id',
    ];

    public function post()
    {
        return $this->belongsTo('Post');
    }
    
}