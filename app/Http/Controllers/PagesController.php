<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function page(Request $request, $page){
      $page=  Page::where('slug',$page)->first();
      if ($page){
          return view('pages.page',[
              'page' => $page,
          ]);
      }
    }
}
