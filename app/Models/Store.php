<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'city',
        'description',
        'image',
        'user_id'
    ];

    //il nome della funzione deve essere al singolare
    public function user()
    {
        //tutti gli store sono collegati correttamente ad un oggetto della classe user
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        //La return della funzione products restituisce tutti i prodotti
        return $this->belongsToMany(Product::class);
    }
}
