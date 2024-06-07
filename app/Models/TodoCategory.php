<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TodoCategory extends Model
{
    use HasFactory;

    protected $table = 'todo_categories';
    protected $fillable = [
        'name',
    ];

    /**
     * Get the todolists for the todo category.
     */
    public function todolists(): HasMany
    {
        return $this->hasMany(Todolist::class);
    }
}
