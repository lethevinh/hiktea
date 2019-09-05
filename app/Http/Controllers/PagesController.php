<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller {
	public function root() {
		return view('pages.root');
	}

	public function home() {
		$posts = Post::orderBy('updated_at', 'desc')->take(5)->get();
		return view('pages.home', [
			'posts' => $posts,
			'categories' => $this->getCategories(),
		]);
	}
	public function contact() {
		return view('pages.contact', [
			'categories' => $this->getCategories(),
		]);
	}

	public function page(Request $request, $page) {
		$page = Page::where('slug', $page)->first();
		if ($page) {
			return view('pages.page', [
				'categories' => $this->getCategories(),
				'page' => $page,
			]);
		}
	}
}
