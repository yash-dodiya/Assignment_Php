<?php
/*How to pass Multiple Variable in route?
// outes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('users/{user_id}/posts/{post_id}',[UserController::class, 'show'])->name("users.posts.show");


// app/Http/Controllers/UserController.php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $user_id, $post_id)
    {
        dd($user_id, $post_id);
    }
}

<a href="{{ route('users.posts.show', ['user_id' => 1, 'post_id' => 10]) }}">Show</a>

?>