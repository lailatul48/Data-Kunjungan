<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class UsersCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'nis'   => 'Nis',
        'name'   => 'Name',
         'email'    => 'Email',
        'password'   => 'Password',
         'level'    => 'Level',
        'status'   => 'Status',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nis'   => 'required|max:225',
            'name'   => 'required|max:225',
            'email' => 'required|email|unique:contacts,email|max:225',
            'password'   => 'required|max:30',
            'level'   => 'required|max:30',
            'status'   => 'required|max:30',
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

}
