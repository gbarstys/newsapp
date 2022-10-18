<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('headline', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
