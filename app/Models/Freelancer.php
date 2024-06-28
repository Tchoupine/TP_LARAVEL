<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    protected $freelancer=[
            'First Name',
            'Last Name',
            'Phone Number',
            'Email Address',
            'Address',
            'Contry', 
            'City', 
            
    ];
}
