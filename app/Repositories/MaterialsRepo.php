<?php

namespace App\Repositories;

use App\Models\Material;

class MaterialsRepo
{
    public function index(){
        return Material::all();
    }
   

}