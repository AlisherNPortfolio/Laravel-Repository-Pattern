<?php
namespace App\Repository;

use Illuminate\Support\Collection;

interface PostsRepositoryInterface {
    public function allActive(): Collection;

    public function delete(int $id);
}
