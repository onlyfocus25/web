<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'program_a_choice',
        'program_b_choice',
        'program_c_choice',
        'program_d_choice',
        'program_e_choice',
    ];

    /**
     * Get the user that owns the program.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
