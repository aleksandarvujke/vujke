<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class Gallery extends Model
{
    protected $guarded = [];


    public function user()
    {
    	$this->belongsTo(User::class);
    }


    public function likes()
    {
    	return $this->hasMany(Like::class); 
    }
   
   public function isAuthUserLikedPost()
   {
      $isUserLiked = $this->likes()->where('user_id',  Auth::user()->id)->get();
      if ($isUserLiked->isEmpty()){
          return false;
      }
        return true;
   }

    // public function like($user = null, $liked = true)
    // {
    // 	$this->likes()->updateOrCreate([

    // 		"user_id" => $user ? $user->id : auth()->id()
    // 	],

    // 	["liked" => $liked


    // 	]);
    // }
    // public function dislike($user = null)
    // {
    // 	return $this->like($user, false);
    // }
    // public function isLikedBy(User $user)
    // {
    // 	return (bool) $user->likes->where('gallery_id', $this->id)->where('liked', true)->count();
    // }
    // public function isDislikedBy(User $user)
    // {
    // 	return (bool) $user->likes->where('gallery_id', $this->id)->where('liked', false)->count();
    // }
    // public function scopeWithLikes(Builder $query)
    // {
    	
    // 	$query->leftJoinSub("select gallery_id, sum(liked) likes, sum(!liked) disliked from likes group by gallery_id",
    // 	'likes',
    // 	'likes.gallery_id',
    // 	'galleries.id');

    	
    // }
}
