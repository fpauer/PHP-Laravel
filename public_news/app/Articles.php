<?php

namespace PublicNews;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
	protected $table = 'Articles';
	protected $fillable = ['user_id', 'title', 'body', 'photo_path', 'link', 'author_name', 'author_email', 'updated_at', 'active'];
	protected $visible = ['user_id', 'title', 'body', 'photo_path', 'link', 'author_name', 'author_email', 'created_at', 'updated_at', 'active'];

}
