<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller {
	public function root() {
		return view('pages.root');
	}

	public function home() {
		$slider = Slider::where('slug', 'hom-home')->first();
		$posts = Post::orderBy('updated_at', 'desc')->take(5)->get();
		$branchs = Branch::orderBy('updated_at', 'desc')->take(5)->get();
		return view('pages.home', [
			'posts' => $posts,
			'slider' => $slider,
			'branchs' => $branchs,
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

	public function galleryDetail($gallery) {

		$gallery = Gallery::where('slug', $gallery)->first();

		return view('pages.gallery-detail', [
			'gallery' => $gallery,
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
