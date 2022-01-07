<?php

namespace App\UseCases\Post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

/**
 * Post Index Action
 */
class IndexAction
{
    /**
     * 一覧結果データを返却する
     *
     * @param Post $post 保存対象の投稿
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function __invoke(): Collection
    {
        return Post::all();
    }
}
