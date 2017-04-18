<?php

namespace App\Http\Controllers;

use App\Http\Requests\Log\LogCreateRequest;
use App\Http\Requests\Log\LogEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\LogInterface;

class LogController extends Controller
{

    /**
     * @var LogInterface
     */
    protected $log;

    /**
     * LogController constructor.
     * @param LogInterface $log
     */
    public function __construct(LogInterface $log)
    {
        $this->log = $log;
    }

    /**
     * @api {get} api/logs Request Log with Paginate
     * @apiName GetLogWithPaginate
     * @apiGroup Log
     *
     * @apiParam {Number} page Paginate log lists
     */
    public function index(Request $request)
    {
        return $this->log->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/logs/id Request Get Log
     * @apiName GetLog
     * @apiGroup Log
     *
     * @apiParam {Number} id id_log
     * @apiSuccess {Number} id id_log
     * @apiSuccess {Varchar} name name of log
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of log
     * @apiSuccess {Number} phone phone of log
     */
    public function show($id)
    {
        return $this->log->findById($id);
    }

    /**
     * @api {post} api/logs/ Request Post Log
     * @apiName PostLog
     * @apiGroup Log
     *
     *
     * @apiParam {Varchar} name name of log
     * @apiParam {Varchar} email email of log
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of log
     * @apiSuccess {Number} id id of log
     */
    public function store(LogCreateRequest $request)
    {
        return $this->log->create($request->all());
    }

    /**
     * @api {put} api/logs/id Request Update Log by ID
     * @apiName UpdateLogByID
     * @apiGroup Log
     *
     *
     * @apiParam {Varchar} name name of log
     * @apiParam {Varchar} email email of log
     * @apiParam {Varchar} address address of log
     * @apiParam {Float} phone phone of log
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(LogEditRequest $request, $id)
    {
        return $this->log->update($id, $request->all());
    }

    /**
     * @api {delete} api/logs/id Request Delete Log by ID
     * @apiName DeleteLogByID
     * @apiGroup Log
     *
     * @apiParam {Number} id id of log
     *
     *
     * @apiError LogNotFound The <code>id</code> of the Log was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->log->delete($id);
    }

}