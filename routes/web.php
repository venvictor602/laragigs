<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;


Route::get('/', function () {
    return view('listings', [
        'heading'=>'lastest listing',
        'listings'=>Listing::all()
    ]);
});

// finding one listing 

Route::get('/single/{id}', function ( $id) {
    return view('single', [
        'heading'=>'lastest listing',
        'listings'=>Listing::find($id)
    ]);
});


