<?php

namespace App\Repository\Eloquent;

use App\Repository\PostsRepositoryInterface;
use App\Models\Posts;
use Illuminate\Support\Collection;

class PostsRepository extends BaseRepository implements PostsRepositoryInterface {
    protected $model;

    public function __construct(Posts $model)
    {
        parent::__construct($model);
    }

    public function allActive(): Collection
    {
        return $this->model->where('status', 1)->all();
    }

    public function delete(int $id)
    {
        return $this->model->delete($id);
    }
}
