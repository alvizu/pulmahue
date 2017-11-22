<?php

namespace App\Http\Controllers;
use App\Product;

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
    	return view('admin.products.create'); // formulario de registro
	  }

	  public function store(Request $request)
    {
      //validar
      $messages = [
        'name.required' => 'Debe ingresar un nombre',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
      ];

      $rules = [
        'name' => 'required|min:4',
        'description' => 'required',
        'price' => 'required|numeric|min:0'
      ];
      $this->validate($request, $rules, $messages);
		    // registra el nuevo producto
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->long_description = $request->input('long_description');
      $product->price = $request->input('price');
      $product->category_id = $request->input('category_id');
      $product->save(); // insert en db

      return redirect('/admin/products');
	  }

    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.products.edit')->with(compact('product'));
    }

    public function update(Request $request, $id)
    {
      $messages = [
        'name.required' => 'Debe ingresar un nombre',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
      ];

      $rules = [
        'name' => 'required|min:4',
        'description' => 'required',
        'price' => 'required|numeric|min:0'
      ];
      $this->validate($request, $rules, $messages);

        // registra el nuevo producto
      $product = Product::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->long_description = $request->input('long_description');
      $product->price = $request->input('price');
      $product->category_id = $request->input('category_id');
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
