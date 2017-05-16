<?php
namespace App\Http\Controllers\Pages;

use App\Http\Requests\User\LogCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\LogRepository;
use App\Http\Controllers\Controller;

class LogsController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $logs;
    /**
     * UserController constructor.
     * @param UserInterface $logs
     */
    public function __construct(LogRepository $log)
    {
        $this->middleware('auth');
        $this->logs = $log;
    }
    public function index(Request $request)
    {
        $log = $this->logs->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-logs', ['logs' => $log]); 
    }
    public function create()
    {
        return view('pages.create-logs'); 
    }
    public function edit($id)
    {
         $log = $this->logs->findById($id);
        return view('pages.edit-logs',compact('log'));  
    }
}