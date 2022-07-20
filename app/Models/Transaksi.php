<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function pelanggans(){
        return $this->hasOne(Pelanggan::class,'id','pelanggans_id');
    }

}
