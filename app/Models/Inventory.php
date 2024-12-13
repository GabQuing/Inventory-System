<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'component_id',
        'product_name' ];

    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

        
}
