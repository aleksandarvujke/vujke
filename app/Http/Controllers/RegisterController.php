<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tretmans;
use App\Gallery;
use App\Like;

class RegisterController extends Controller
{

	   public function home()
     {

       $galleries = Gallery::latest()->take(6)->get();
       //DB::table('galleries')->select('*')->orderByDesc('created_at')
      //   ->limit(6)->get();

       
      $tretmans = Tretmans::latest()->get();             
                     
      
       return view('pages.index', compact('tretmans','galleries','likes'));
     }

    public function create()
    {
      return view('user.create');
    }

    public function store(User $user)
    {
          $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required'


          ]);


    $password = Hash::make('secret');


     $user = User::create(['name' => request('name'), 'email' => request('email'), 'password' => Hash::make(request('password'))





 ]);

     


    auth()->login($user);

    return redirect('index');
    }
    public function like(Request $request)
    {
       $gallery_id = $request['likeId'];
           $is_like = $request['isLike'] === 'true';
           $update = false;
           $already_like = true;
           $gallery = Gallery::find($gallery_id);
           if (!$gallery) {
               // return null;
           }
           $user = Auth::user();
           $like = $user->likes()->where('gallery_id', $gallery_id)->first();
           if ($like) {
               $already_like = $like->liked;
               $update = true;
               if ($already_like == $is_like) {
                   $like->delete();
                    $already_like = false;
               }
           } else {
               $like = new Like();
           }
           $like->liked = $is_like;
           $like->user_id = $user->id;
           $like->gallery_id = $gallery->id;
           if ($update) {
               $like->update();
           } else {
               $like->save();
           }
           
           $liked = DB::table('likes')
                     ->select(DB::raw('count(liked) as likes'))
                     ->where('liked', '=', 1)
                     ->where('gallery_id', '=', $request['likeId'])
                     ->get();
       

                  return response()->json(['count' => $liked, 'alreadyLiked' => $already_like]);

       }

    
}
