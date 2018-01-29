<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public static $messages = [
    'name.required' => 'Debe ingresar un nombre',
    'name.min' => 'El nombre debe tener al menos 4 caracteres',
    'description.required' => 'La descripción es obligatoria',
    'description.max' => 'La descripción solo admite 200 caracteres'
  ];

  public static $rules = [
    'name' => 'required|min:4',
    'description' => 'required|max:200',
  ];

    protected $fillable = ['name', 'description'];

    // $category->products
    public function products()
    {
      return $this->hasMany(Product::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredProduct = $this->products()->first();
        return $featuredProduct->featured_image_url;
    }
}
