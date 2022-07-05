<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type'
    ];

    /**
     * @return BelongsToMany
     */
    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class)->withTimestamps();
    }


    /**
     * メニューの合計カロリーを返す
     *
     * @return float
     */
    public function getCalorie(): float
    {
        return array_sum($this->recipes()->pluck('calorie')->toArray());
    }
}
