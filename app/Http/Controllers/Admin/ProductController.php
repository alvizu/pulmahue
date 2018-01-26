<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(5);
    	return view('admin.products.index')->with(compact('products')); // listado
    }

    public function create()
    {
      $categories = Category::orderBy('name')->get();
      return view('admin.products.create')->with(compact('categories')); // formulario de registro
	  }

	  public function store(Request $request)
    {
      //validar
      $messages = [
        'name.required' => 'Debe ingresar un nombre',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
        'description.required' => 'La descripción es obligatoria',
        'description.max' => 'La descripción solo admite 200 caracteres',
        'price.required' => 'El precio es obligatorio',
        'long_description.required' => 'La descripción larga es obligatoria'
      ];

      $rules = [
        'name' => 'required|min:4',
        'description' => 'required|max:200',
        'price' => 'required|numeric|min:0',
        'long_description' => 'required'
      ];
      $this->validate($request, $rules, $messages);
		    // registra el nuevo producto
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->long_description = $request->input('long_description');
      $product->price = $request->input('price');
      $product->category_id = $request->category_id;
      $product->save(); // insert en db

      return redirect('/admin/products');
	  }

    public function edit($id)
    {
      $categories = Category::orderBy('name')->get();
      $product = Product::find($id);
      return view('admin.products.edit')->with(compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
      $messages = [
        'name.required' => 'Debe ingresar un nombre',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
        'description.required' => 'La descripción es obligatoria',
        'description.max' => 'La descripción solo admite 200 caracteres',
        'price.required' => 'El precio es obligatorio',
        'long_description.required' => 'La descripción larga es obligatoria'
      ];

      $rules = [
        'name' => 'required|min:4',
        'description' => 'required|max:200',
        'price' => 'required|numeric|min:0',
        'long_description' => 'required'
      ];
      $this->validate($request, $rules, $messages);

        // registra el nuevo producto
      $product = Product::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->long_description = $request->input('long_description');
      $product->price = $request->input('price');
      $product->category_id = $request->category_id;
      $product->save(); // update en db

      return redirect('/admin/products');
	  }

    public function destroy($id)
    {
		    // registra el nuevo producto
      $product = Product::find($id);
      $product->delete(); // delete en db

      return back();
	  }


}
