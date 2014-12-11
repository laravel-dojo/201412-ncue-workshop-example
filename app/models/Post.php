<?php

class Post extends \Eloquent {
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];
    
    public function category()
    {
        return $this->belongsTo('Category');
    }
    
    public function comments()
    {
        return $this->hasMany('Comment');
    }
    
}