<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'merk', 'harga_beli', 'diskon', 'harga_jual', 'stock'];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
