<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RaceRequest;
use App\Repositories\RaceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Webpatser\Uuid\Uuid;

class RaceController extends ApiController
{

    public function __construct(RaceRepository $repository)
    {
        parent::__construct($repository);
        $this->middleware('jwt');
    }

    /**
     * 所有
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index()
    {
        return $this->response->collection($this->repository->page());
    }

    /**
     * 新增
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $input = $request->input();

        $validator = Validator::make($input,(new RaceRequest())->rules());

        if ($validator->fails()){
            return $this->response->withError($validator->messages());
        }

        $data = array_merge(
            $input,
            [
                'uuid' => Uuid::generate()->string
            ]
        );

        $this->repository->store($data);

        return $this->response->withNoContent();
    }

    /**
     * 删除
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);

        return $this->response->withNoContent();
    }

    /**
     * 更新
     *
     * @param RaceRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RaceRequest $request, $id)
    {

        $data = $request->input();

        $this->repository->update($id, $data);

        return $this->response->withNoContent();
    }


    /**
     * 显示
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show($id)
    {
        $show = $this->repository->getById($id);

        if (empty($show)){
            return $this->response->withError('没有这个id');
        }
        return $this->response->item($show);
    }
}
