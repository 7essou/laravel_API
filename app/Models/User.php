<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'name_on_card',
        'card_number',
        'expiry_date',
        'cvv',
        'zip',
        'country',
        'billing_same',
        'payment_method',
    ];
}
