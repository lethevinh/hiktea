<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller {

	public function index(Request $request) {

		$builder = Post::query()->where('on_view', true);
		if ($search = $request->input('search', '')) {
			$like = '%' . $search . '%';
			$builder->where(function ($query) use ($like) {
				$query->where('title', 'like', $like)
					->orWhere('description', 'like', $like)
					->orWhereHas('skus', function ($query) use ($like) {
						$query->where('title', 'like', $like)
							->orWhere('description', 'like', $like);
					});
			});
		}

		$posts = $builder->paginate(16);

		return view('posts.index', [
			'posts' => $posts,
			'category' => false,
			'filters' => [
				'search' => $search,
			],
		]);
	}

	public function category(Request $request, $category) {
		$builder = Post::query()->where('on_view', true);
		$builder = $builder->whereHas('categories', function ($q) use ($category) {
			$q->where('slug', $category);
		});
		$cat = PostCategory::where('slug', $category)->first();
		if (!$cat) {
			return view('pages.error', ['msg' => 'find not found Category']);
		}
		// 判断是否有提交 search 参数，如果有就赋值给 $search 变量
		// search 参数用来模糊搜索商品
		if ($search = $request->input('search', '')) {
			$like = '%' . $search . '%';
			// 模糊搜索商品标题、商品详情、SKU 标题、SKU描述
			$builder->where(function ($query) use ($like) {
				$query->where('title', 'like', $like)
					->orWhere('description', 'like', $like)
					->orWhereHas('skus', function ($query) use ($like) {
						$query->where('title', 'like', $like)
							->orWhere('description', 'like', $like);
					});
			});
		}

		$posts = $builder->paginate(16);

		return view('posts.index', [
			'posts' => $posts,
			"category" => $cat,
			'filters' => [
				'search' => $search,
			],
		]);
	}

	public function post(Request $request, $category, $post) {
		$post = Post::where('slug', $post)->where('on_view', true)->first();

		if (!$post) {
			return view('pages.error', ['msg' => 'find not found post']);
		}

		$category = PostCategory::where('slug', $category)->first();

		return view('posts.post', [
			'post' => $post,
			'category' => $category,
		]);
	}
}
