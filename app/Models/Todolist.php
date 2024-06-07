<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todolist extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'todo_category_id',
        'user_id',
        'deadline',
    ];

    /**
     * Get the user that owns the todolist.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the todo category that owns the todolist.
     */
    public function todoCategory(): BelongsTo
    {
        return $this->belongsTo(TodoCategory::class);
    }
}
