<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kelahiran() {
        return $this->hasMany(Kelahiran::class);
    }

}
