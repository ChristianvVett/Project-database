<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $eStores =Store::all();

        // $eStores = store::where('user_id', 1)->get();

        // $eStores=Store::orderBy('created_at', 'DESC')->get(); ordine in base all'ultimo messo

        // $eStores=Store::orderBy('created_at', 'DESC')->first();

        return view('eStore.index', ['stores'=>$eStores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        return view('eStore.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eStore = store::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'image'=>$request->has('image') ? $request->file('image')->store('public/image') : 'standardImage/the office.jpg',
            'user_id'=>Auth::user()->id
            // 'image'=>$request->file('image')->store('public/image'),
        ]);

        // $eStore->products()->attach($request->products);

        foreach($request->products as $productId){

            //Il numero che ti sta arrivando è l'id del prodotto che dovrai attaccare allo store che sto memorizzando, l'attach avviene nella tabella pivot
            $eStore->products()->attach($productId);
        }

        return redirect(route('home'))->with('message', 'Hai memorizzato correttamente il negozio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('eStore.show', ['store'=>$store]);

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */

    }
    public function edit(Store $store)
    {
        $products=Product::all();

        return view('eStore.edit', compact('store', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        // dd($request->all(), $store);
        $store->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'image'=>$request->has('image') ? $request->file('image')->store('public/image') : $store->image,   
        ]);

        foreach($request->products as $productId){

            $store->products()->attach($productId);
        };

        return redirect(route('home'))->with('message', 'Hai aggiornato correttamente il negozio');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //Dello store specificp, prendi tutti i prodotti collegati dello singolo prodotto, che ricordiamo può essere collegato anche ad altri negozi, sganciamo solo l'id
        foreach($store->products as $product){
            $product->store()->detach($store->id);
        }    

        $store->delete();

        //Abbiamo 3 parti
        //Delete -> che è il metodo della rotta
        //Destroy -> che è la funzione del crud di laravel che ci permette di cancellare un elemento
        //Delete -> che è la funzione di eleoquent legata al modello $store

        return redirect(route('home'))->with('message', 'Hai distrutto correttamente il negozio');
    }

}

