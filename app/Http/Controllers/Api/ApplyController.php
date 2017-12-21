<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApplyRequest;
use App\Repositories\ApplyRepository;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ApplyController extends ApiController
{
    public function __construct(ApplyRepository $repository)
    {
        parent::__construct($repository);
        $this->middleware(['cross','jwt']);
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

        $messages = $this->validator($input,(new ApplyRequest())->rules());
        if ($messages){
            return $this->response->json($messages);
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
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $input = $request->input();

        $messages = $this->validator($input,(new ApplyRequest())->rules());
        if ($messages){
            return $this->response->json($messages);
        }

        $this->repository->update($id, $input);

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
