<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller {
	public function root() {
		return view('pages.root');
	}

	public function home() {
		$posts = Post::orderBy('updated_at', 'desc')->take(5)->get();
		$branchs = Branch::orderBy('updated_at', 'desc')->take(5)->get();
		return view('pages.home', [
			'posts' => $posts,
			'branch' => $branchs,
			'categories' => $this->getCategories(),
		]);
	}

	public function contact() {
		return view('pages.contact', [
			'categories' => $this->getCategories(),
		]);
	}

	public function gallery() {
		return view('pages.gallery', [
			'galleries' => Gallery::get(),
		]);
	}

	public function branch() {
		return view('pages.branch', [
			'branchs' => Branch::get(),
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
