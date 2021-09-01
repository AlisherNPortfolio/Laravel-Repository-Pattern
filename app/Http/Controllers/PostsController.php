<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Eloquent\PostsRepository;

class PostsController extends Controller
{
    private $repository;

    public function __construct(PostsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllActiveItems()
    {
        return $this->repository->allActive();
    }

    public function delete(Request $request, int $id)
    {
        return $this->repository->delete($id);
    }
}
