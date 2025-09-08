<?php

namespace App\Models;

use App\Enums\ForumStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Dom\Attr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model{
    use HasFactory;

    protected $fillable = [
        'subject', 
        'body', 
        'status'
    ];

    public function status(): Attribute{
        return Attribute::make(
            set: fn(ForumStatus $status) => $status->name,
        );
    }
}
