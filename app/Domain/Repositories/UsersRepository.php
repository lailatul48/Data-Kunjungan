<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Users;
use App\Domain\Contracts\UsersInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class UsersRepository
 * @package App\Domain\Repositories
 */
class UsersRepository extends AbstractRepository implements UsersInterface, Crudable
{

    /**
     * @var Users
     */
    protected $model;

    /**
     * UsersRepository constructor.
     * @param Users $Users
     */
    public function __construct(Users $Users)
    {
        $this->model = $Users;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        return parent::paginate($limit, $page, $column, 'name', $search);
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'name' => e($data['name']),
            'email' => e($data['email']),
            'password' => e($data['password']),
            'level' => e($data['level']),
            'status' => e($data['status']),
        ]);

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::create([
            'name' => e($data['name']),
            'email' => e($data['email']),
            'password' => e($data['password']),
            'level' => e($data['level']),
            'status' => e($data['status']),
        ]);

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

}