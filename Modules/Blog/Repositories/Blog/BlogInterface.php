<?php

namespace Modules\Blog\Repositories\Blog;

use App\Repositories\Crud\CrudInterface;

interface BlogInterface extends CrudInterface
{
	public function create($data);
	public function update($data, $id);
}
