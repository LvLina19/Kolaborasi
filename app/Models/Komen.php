<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komen extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'komentar', 'menu_id'];
    
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class)->withDefault();
    }
}
