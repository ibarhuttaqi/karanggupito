<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('namaBayi', 'like', '%' . $search . '%')
                ->orWhere('nomorSurat', 'like', '%' . $search . '%')
                ->orWhere('tanggalSurat', 'like', '%' . $search . '%');
        });
        
    }

    public function manager() {
        return $this->belongsTo(Manager::class);
    }
    
}
