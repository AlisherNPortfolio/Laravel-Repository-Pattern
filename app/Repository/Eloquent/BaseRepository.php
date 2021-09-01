<?php
namespace App\Repository\Eloquent;

use App\Repository\EloqunetRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloqunetRepositoryInterface {
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
