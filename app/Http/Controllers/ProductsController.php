<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultar productos de la base de datos
        $products = Product::all(); 
        //Listar productos
        return  view ('products.index', ['products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Vista para crear productos
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //funcion para guardar producto
        $producto = new Product;

        $producto->tittle = $request->tittle;
        $producto->description = $request->description;
        $producto->precio = $request->precio;
        $producto->user_id = Auth::user()->id;

        if ($producto->save()) {
            # code...
            return redirect('/products');
        }else{
            return view('/products.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostarr producto e especifico
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mostrar formulario d edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //metodo de editar producto
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar producto


    }
}
