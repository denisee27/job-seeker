<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $fillable = [
        'company_id',
        'job',
        'email',
        'description',
        'location',
        'url',
    ];
    public function company()
    {
        $this->belongsTo(User::class, 'company_id','id');
    }
}
