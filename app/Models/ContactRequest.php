<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $table = 'contact_requests';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'project_type',
        'budget',
        'message',
        'locale',
        'consent',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'consent' => 'boolean',
        ];
    }
}
