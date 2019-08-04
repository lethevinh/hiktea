<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\InvalidRequestException;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller as BaseController;
class Controller extends BaseController
{
    public $model;
    public $modelResource;
    public $modelCollection;

    public function __construct(Request $request)
    {
        $this->model = "App\Models\\". Str::studly($request->model);
        $this->modelResource = "App\Http\Resources\\". Str::studly($request->model);
        $this->modelCollection = "App\Http\Resources\\". Str::studly(Str::plural($request->model));
    }

    public function index()
    {
        return new $this->modelCollection($this->model::paginate());
    }

    public function show(Request $request)
    {
        if ($model = $this->model::findOrFail($request->id)) {
            return new $this->modelResource($model);
        }
        return response()->json(null, 400);
    }

    public function store(Request $request)
    {
        $model = $this->model::create($request->all());
        return new $this->modelResource($model);
    }

    public function update(Request $request)
    {
        if ($model = $this->model::findOrFail($request->id)) {
            $model->update($request->all());
            return new $this->modelResource($model);
        }
        return response()->json(null, 400);
    }

    public function delete(Request $request)
    {
        $model = $this->model::find($request->id);
        $model->delete();
        return response()->json(null, 204);
    }
}
