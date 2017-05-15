<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Master\User;

/**
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Create new instance PageController
     */

    /**
     * Show page login
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {

    }

    public function getlandingpage()
    {
        return view('pages.landingpage');
    }

    /**
     * @return string
     */
    public function token()
    {
        return csrf_token();
    }

    public function backoffice()
    {
        return view('backoffice');

    }

    public function frontoffice()
    {
        return view('frontoffice');
    }

    public function signup()
    {
        return view('pendaftaran');
    }
   public function rekening()
    {
        return view('rekening');
    }
   public function pendaftaran()
    {
        return view('pendaftaran');
    }
   public function konfirmasi()
    {
        return view('konfirmasi');
    }

    public function confirm($confirmation_code)
    {
        $users = \DB::table('users')
            ->where('confirmation_code', $confirmation_code)
            ->count();

        if ($users == 0) {
            session()->flash('auth_message', 'maaf user konfirmasi email tidak berlaku lagi');
            return redirect()->route('page.konfirmasi');

        } else {
            $user = \DB::table('users')
                ->where('confirmation_code', $confirmation_code)
                ->first();
            $userupdate = User::find($user->id);

            $userupdate->is_aktif = 1;
            $userupdate->confirmation_code = 0;
            $userupdate->save();
            session()->flash('auth_messagee', 'User berhasil dikonfirmasi ');
            return redirect()->route('page.konfirmasi');

        }
    }

}



