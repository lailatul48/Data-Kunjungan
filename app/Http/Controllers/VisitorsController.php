<?php

namespace App\Http\Controllers;

use App\Http\Requests\Visitors\VisitorsCreateRequest;
use App\Http\Requests\Visitors\VisitorsEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\VisitorsInterface;

class VisitorsController extends Controller
{

    /**
     * @var visitorsInterface
     */
    protected $visitors;

    /**
     * visitorsController constructor.
     * @param visitorsInterface $visitors
     */
    public function __construct(VisitorsInterface $visitors)
    {
        $this->visitors = $visitors;
    }

    /**
     * @api {get} api/visitorss Request visitors with Paginate
     * @apiName GetvisitorsWithPaginate
     * @apiGroup visitors
     *
     * @apiParam {Number} page Paginate visitors lists
     */
    public function index(Request $request)
    {
        return $this->visitors->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/visitorss/id Request Get visitors
     * @apiName Getvisitors
     * @apiGroup visitors
     *
     * @apiParam {Number} id id_visitors
     * @apiSuccess {Number} id id_visitors
     * @apiSuccess {Varchar} name name of visitors
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of visitors
     * @apiSuccess {Number} phone phone of visitors
     */
    public function show($id)
    {
        return $this->visitors->findById($id);
    }

    /**
     * @api {post} api/visitorss/ Request Post visitors
     * @apiName Postvisitors
     * @apiGroup visitors
     *
     *
     * @apiParam {Varchar} name name of visitors
     * @apiParam {Varchar} email email of visitors
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of visitors
     * @apiSuccess {Number} id id of visitors
     */
    public function store(VisitorsCreateRequest $request)
    {
        return $this->visitors->create($request->all());
    }

    /**
     * @api {put} api/visitorss/id Request Update visitors by ID
     * @apiName UpdatevisitorsByID
     * @apiGroup visitors
     *
     *
     * @apiParam {Varchar} name name of visitors
     * @apiParam {Varchar} email email of visitors
     * @apiParam {Varchar} address address of visitors
     * @apiParam {Float} phone phone of visitors
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(VisitorsEditRequest $request, $id)
    {
        return $this->visitors->update($id, $request->all());
    }

    /**
     * @api {delete} api/visitorss/id Request Delete visitors by ID
     * @apiName DeletevisitorsByID
     * @apiGroup visitors
     *
     * @apiParam {Number} id id of visitors
     *
     *
     * @apiError visitorsNotFound The <code>id</code> of the visitors was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->visitors->delete($id);
    }

}