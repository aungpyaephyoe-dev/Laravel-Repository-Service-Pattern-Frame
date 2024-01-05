<?php 

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface 
{
    public function all();
    public function create(array $attributes) : Model;
    public function find($id): ?Model;
}