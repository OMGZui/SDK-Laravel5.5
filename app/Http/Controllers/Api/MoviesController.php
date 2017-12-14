<?php

namespace App\Http\Controllers\Api;

use App\Models\Movies;
use App\Repositories\MoviesRepository;

class MoviesController extends ApiController
{
    protected $model;

    public function __construct(MoviesRepository $repository, Movies $model)
    {
        parent::__construct($repository);
        $this->model = $model;
    }

    /**
     * 所有电影
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $result = $this->model->getList();

        return $this->response->collection($result);
    }
}
