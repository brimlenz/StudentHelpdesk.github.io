<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];


    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'solved_id');
    }

}
