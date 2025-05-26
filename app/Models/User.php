<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // <-- important
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'nameOnCard',
        'cardNumber',
        'expiryDate',
        'cvv',
        'paypal',
        'zip',
        'country',
        'billingSame',
        'paymentMethod',
    ];
}
