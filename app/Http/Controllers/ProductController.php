<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    
    public function wel(){
        $products=Product::all();
        // dd($products);
        return view('product.wel', ['products'=>$products]);
    }


    public function create(){
        return view('product.create');
    }

    public function store(ProductRequest $request){
        //dd($request->all());
    //   dd($request->all()); 
    // $product = new Product(); 
    // $product->name = $request->name;
    // $product->price = $request->price;
    // $product->description = $request->description;

    // $product->save();

    if($request->image){
        $product = Product::create([  //se arriva l'immagine dal form
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$request->file('image')->store('public/image'),
        ]);
    }else{
        $product = Product::create([ //se non arriva l'immagine del form
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            
        ]); 
    }

    // $product = Product::create([
    //     'name'=>$request->name,
    //     'price'=>$request->price,
    //     'description'=>$request->description,
    //     'image'=>$request->file('image')->store('public/image'),
    // ]);

    return redirect(route('home'))->with('messagestore', 'hai memorizzato correttamente il prodotto');
    }

    public function show($id){
        $products=Product::all();

        foreach ($products as $product) {
            if($product->id == $id){
                return view('product.show', ['product'=>$product]);
            }
        }
    }
        
}