<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Repository;
use Mockery\Exception;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function findById($id)
    {
        $result =$this->model->find($id);
        return $result;
    }

    public function create($data)
    {
        try{
            $object = $this->model->create($data);
        } catch (Exception $exception){
            return null;
        }
        return $object;
    }
}
