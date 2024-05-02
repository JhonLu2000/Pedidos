<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;




class ProductController extends Controller
{

    public function index(){

        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); // listado

    }

    public function create(){
          return view('admin.products.create'); // formulario de registro


        
    }

    public function store(Request $request){
        // registro del producto en la bd

       // dd($request->all());

        $messages =[

        'name.required' => 'Es necesario ingresar un nombre para el producto.',
        'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
        'description.required' => 'La descripción corta es un campo obligatorio.',
        'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
        'price.required' =>'Es obligatorio definir un precio para el producto.',
        'price.numeric' =>'Ingrese un precio válido.',
        'price.min' =>'No se admiten valores negativos.'


        ];

        $rules =[
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

    $product = new Product();
    $product->name= $request->input('name');
    $product->description= $request->input('description');
    $product->price= $request->input('price');
    $product->long_description= $request->input('long_description');
    $product->save(); // insert

   return redirect('/admin/products');
        
    }


    public function edit($id){

       // return "Mostrar aqui el form de edicion para el producto con id $id";
        $product = Product::find($id);
          return view('admin.products.edit')->with(compact('product')); // formulario de registro


        
    }

    public function update(Request $request, $id){
        // registro del producto en la bd

       // dd($request->all());



         $messages =[

        'name.required' => 'Es necesario ingresar un nombre para el producto.',
        'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
        'description.required' => 'La descripción corta es un campo obligatorio.',
        'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
        'price.required' =>'Es obligatorio definir un precio para el producto.',
        'price.numeric' =>'Ingrese un precio válido.',
        'price.min' =>'No se admiten valores negativos.'


        ];

        $rules =[
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

    $product = Product::find($id);
    $product->name= $request->input('name');
    $product->description= $request->input('description');
    $product->price= $request->input('price');
    $product->long_description= $request->input('long_description');
    $product->save(); // update

   return redirect('/admin/products');
        
    }

     public function destroy($id){
     
    $product = Product::find($id);
    $product->delete(); // delete

   return back();
        
    }
    


}
