<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;
    protected $fillable = ['foto', 'nama_makanan', 'deskripsi', 'harga'];
    protected $table = 'menus';
    
    public function komen(): HasMany
    {
        return $this->hasMany(Komen::class);
    }
}
