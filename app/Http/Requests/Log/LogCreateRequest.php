<?php

namespace App\Http\Requests\Log;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class LogCreateRequest extends Request
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
        'nama'   => 'Nama',
        'email'   => 'Email',
        'telephone'   => 'Telephone',
        'keperluan'   => 'Keperluan',
        'desciption'   => 'Desciption'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'   => 'required|max:225',
            'email' => 'required|email|unique:contacts,email|max:225',
            'telephone'   => 'required|max:225',
            'keperluan'   => 'required|max:225',
            'description'   => 'required|max:225'
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
