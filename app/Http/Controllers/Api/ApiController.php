<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 15:42
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\BaseRepository;
use App\Support\Response;
use App\Support\Transform;
use League\Fractal\Manager;

class ApiController extends Controller
{
    protected $response;
    protected $repository;
    public function __construct(BaseRepository $baseRepository)
    {
        $this->repository = $baseRepository;
        $manger = new Manager();

        $this->response = new Response(response(), new Transform($manger));
    }

    /**
     * 封装表单验证
     *
     * @param $input
     * @param $rules
     * @return bool|\Illuminate\Support\MessageBag
     */
    public function validator($input, $rules)
    {
        $validator = \Validator::make($input,$rules);

        if ($validator->fails()){
            return $validator->messages();
        }
        return false;
    }
}