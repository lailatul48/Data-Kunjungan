<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UsersCreateRequest;
use App\Http\Requests\Users\UsersEditRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UsersRepository;

class UsersController extends Controller
{

    /**
     * @var visitorsInterface
     */
    protected $users;

    /**
     * visitorsController constructor.
     * @param visitorsInterface $users
     */
    public function __construct(UsersRepository $users)
    {
        $this->users = $users;
    }

    /**
     * @api {get} api/visitorss Request users with Paginate
     * @apiName GetvisitorsWithPaginate
     * @apiGroup users
     *
     * @apiParam {Number} page Paginate users lists
     */
    public function index(Request $request)
    {
        return $this->users->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/visitorss/id Request Get users
     * @apiName Getvisitors
     * @apiGroup users
     *
     * @apiParam {Number} id id_visitors
     * @apiSuccess {Number} id id_visitors
     * @apiSuccess {Varchar} name name of users
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of users
     * @apiSuccess {Number} phone phone of users
     */
    public function show($id)
    {
        return $this->users->findById($id);
    }

    /**
     * @api {post} api/visitorss/ Request Post users
     * @apiName Postvisitors
     * @apiGroup users
     *
     *
     * @apiParam {Varchar} name name of users
     * @apiParam {Varchar} email email of users
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of users
     * @apiSuccess {Number} id id of users
     */
    public function store(UsersCreateRequest $request)
    {
        return $this->users->create($request->all());
    }

    /**
     * @api {put} api/visitorss/id Request Update users by ID
     * @apiName UpdatevisitorsByID
     * @apiGroup users
     *
     *
     * @apiParam {Varchar} name name of users
     * @apiParam {Varchar} email email of users
     * @apiParam {Varchar} address address of users
     * @apiParam {Float} phone phone of users
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(UsersEditRequest $request, $id)
    {
        return $this->users->update($id, $request->all());
    }

    /**
     * @api {delete} api/visitorss/id Request Delete users by ID
     * @apiName DeletevisitorsByID
     * @apiGroup users
     *
     * @apiParam {Number} id id of users
     *
     *
     * @apiError visitorsNotFound The <code>id</code> of the users was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->users->delete($id);
    }

}