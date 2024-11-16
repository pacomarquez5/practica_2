<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lugar extends Model
{
    use HasFactory;

    protected $fillable = ['nombreLugar', 'nombreCorto', 'edificio_id'];

    public function edificio(): BelongsTo
    {
        return $this->belongsTo(Edificio::class);
    }
}
