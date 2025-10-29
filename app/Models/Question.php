<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // <-- Pastikan ini ada

class Question extends Model
{
    use HasFactory;

    /**
     * Inilah fungsi yang hilang.
     *
     * Mendefinisikan bahwa satu Pertanyaan (Question)
     * memiliki banyak Pilihan Jawaban (Option).
     */
    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }
}