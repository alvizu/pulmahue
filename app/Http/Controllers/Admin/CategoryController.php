<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::orderBy('name')->paginate(5);
    return view('admin.categories.index')->with(compact('categories')); // listado
  }

  public function create()
  {
    return view('admin.categories.create'); // formulario de registro
  }

  public function store(Request $request)
  {
    //validar
    $this->validate($request, Category::$rules, Category::$messages);
      // registro en DB categoria otro metodo mas corto que en producto
    Category::create($request->all()); //mass assignment

    return redirect('/admin/categories');
  }

  public function edit($id)
  {
    $category = Category::find($id);
    return view('admin.categories.edit')->with(compact('category'));
  }

  public function update(Request $request, $id)
  {

    $this->validate($request, Category::$rules, Category::$messages);

      // actualizar categoria
    $category = Category::find($id);
    $category->update($request->all());

    return redirect('/admin/categories');
  }

  public function destroy($id)
  {
    $category = Category::find($id);
    $category->delete(); // delete en db

    return back();
  }
}
