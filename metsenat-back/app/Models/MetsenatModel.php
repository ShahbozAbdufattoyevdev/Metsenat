<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetsenatModel extends Model
{
    // frontend dan keladigan malumotni name bilan qabul qilish.
    
    protected $fillable = [
        'UserName',
        'TelNumber',
        'HomiylikSummasi',
    ];
    use HasFactory;
}
