<?php

namespace App\Repository\Eloquent;

use App\Repository\Eloquent\BaseRepository;
use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface {
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
