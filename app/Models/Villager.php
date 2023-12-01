<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'nik';
    
    public function scopeFilter($query, array $filters) {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('nama', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('nik', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('nkk', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('nik', 'like', '%' . $search . '%')
                ->orWhere('nkk', 'like', '%' . $search . '%');
        });
        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     return $query->whereHas('category', function($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
        // $query->when($filters['author'] ?? false, fn($query, $author) 
        //     => $query->whereHas('author', fn($query)
        //     => $query->where('username', $author)
        //     )
        // );
        
    }

    public function letters() {
        return $this->hasMany(Letter::class);
    }
    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'nik';
    }
}
