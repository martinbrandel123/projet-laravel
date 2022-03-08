<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class ProductController extends Controller 
{
    public function show()
    {
        return "liste des produits";
    }

    public function show_id($id)
    {
        return "fiche du produit ". $id;
    }
}