<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Entities\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
/**
* Class AuthController
*
* @package App\Http\Controllers\Auth
*/
class LoginController extends Controller
{
    
    /**
    * @var users
    */
    protected $users;
    
    /**
    * @var Guard
    */
    protected $auth;
    
    /**
    * @param Guard $auth
    * @param users $users
    */
    public function __construct(Guard $auth, users $users)
    {
        $this->users = $users;
        $this->auth = $auth;
        
        $this->middleware('guest', ['only' => ['getlogin', 'postLogin']]);
    }
    
    /**
    * @return \Illuminate\View\View
    */
    public function getLogin()
    {
        return view('pages.login');
    }
    
    /**
    * @param LoginRequest $request
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    public function postLogin(LoginRequest $request)
    {
        if ($this->auth->attempt($request->only('email', 'password'), true)) {
            
            // simpan ke session
            session()->put('users_id', Auth::user()->id);
            session()->put('email', Auth::user()->email);
            session()->put('name', Auth::user()->name);
            session()->put('level', Auth::user()->level);
            
            return redirect()->route('page.dashboard');
            
        }
        
        // redirect to login and set the flash message
        return redirect()->route('page.login')->with('auth_message', 'Kombinasi email dan password salah!');
    }
    
    /**
    * @return \Illuminate\Http\RedirectResponse
    */
    public function getLogout()
    {
        $this->auth->logout();
        
        return redirect()->route('page.login');
    }
}   