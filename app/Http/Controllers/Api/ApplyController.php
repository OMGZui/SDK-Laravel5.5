<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApplyRequest;
use App\Repositories\ApplyRepository;
use Webpatser\Uuid\Uuid;

class ApplyController extends ApiController
{
    public function __construct(ApplyRepository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * 所有报名人员
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->response->collection($this->repository->page());
    }

    /**
     * 新增报名
     *
     * @param ApplyRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(ApplyRequest $request)
    {
        $input = $request->input();

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
     * 删除一个报名
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
     * 更新一个报名
     *
     * @param ApplyRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ApplyRequest $request, $id)
    {

        $data = $request->input();

        $this->repository->update($id, $data);

        return $this->response->withNoContent();
    }



    /**
     * 显示一个报名
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
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
