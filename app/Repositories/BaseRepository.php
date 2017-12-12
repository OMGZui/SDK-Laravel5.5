<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 14:56
 */
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * 数据库记录总条数
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->model->newQuery()->count();
    }


    /**
     * 根据id更新记录
     *
     * @param $id
     * @param $input
     * @return bool
     */
    public function updateColumn($id, $input)
    {
        $this->model = $this->getById($id);

        foreach ($input as $key => $value) {
            $this->model->{$key} = $value;
        }

        return $this->model->save();
    }


    /**
     * 更加id删除记录
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }


    /**
     * 根据id获取单条记录
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->newQuery()->find($id);
    }


    /**
     * 数据库所有记录
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->newQuery()->get();
    }

    /**
     * 数据库分页记录
     *
     * @param int $number
     * @param string $sort
     * @param string $sortColumn
     * @return mixed
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        return $this->model->newQuery()->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * 根据input新增记录
     *
     * @param $input
     * @return mixed
     */
    public function store($input)
    {
        return $this->save($this->model, $input);
    }

    /**
     * 根据id和input更新记录
     *
     * @param $id
     * @param $input
     * @return mixed
     */
    public function update($id, $input)
    {
        $this->model = $this->getById($id);

        return $this->save($this->model, $input);
    }


    /**
     * 根据model和input保存记录，并返回model记录
     *
     * @param $model
     * @param $input
     * @return mixed
     */
    public function save($model, $input)
    {
        $model->fill($input);

        $model->save();

        return $model;
    }
}