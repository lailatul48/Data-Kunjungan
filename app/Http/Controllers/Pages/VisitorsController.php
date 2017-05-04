<?php
namespace App\Http\Controllers\Pages;
use App\Http\Requests\User\VisitorsCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\VisitorsRepository;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $visitors;
    /**
     * UserController constructor.
     * @param UserInterface $visitors
     */
    public function __construct(VisitorsRepository $visitors)
    {
        $this->visitors = $visitors;
    }
    public function index(Request $request)
    {
        $visitors = $this->visitors->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-visitors', ['visitors' => $visitors]); 
    }
    public function create()
    {
        return view('pages.create-visitors'); 
    }
    public function edit($id)
    {
        $visitor = $this->visitors->findById($id);
        return view('pages.edit-visitors',compact('visitor')); 
    }
}