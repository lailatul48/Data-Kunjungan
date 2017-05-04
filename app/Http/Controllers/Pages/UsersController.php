<?php
namespace App\Http\Controllers\Pages;
use App\Http\Requests\User\UsersCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UsersRepository;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(UsersRepository $user)
    {
        $this->user = $user;
    }
    public function index(Request $request)
    {
        $users = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-users', ['users' => $users]); 
    }
    public function create()
    {
        return view('pages.create-users'); 
    }
    public function edit($id)
    {
        $user = $this->user->findById($id);
        return view('pages.edit-users',compact('user')); 
    }
}