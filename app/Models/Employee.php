<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $fillable = [
        'company_id',
        'name',
        'email',
        'resume',
        'image',
        'attech',
    ];
    public function company()
    {
        $this->belongsTo(User::class, 'company_id','id');
    }
}
