<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class create_users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                
                'first_name' => '7ESSOU',
                'last_name' => 'Mohamed',
                'phone' => '0636293377',
                'email' => 'hesmed45@gmail.com',
                'password' => '123456789',
                'nameOnCard' => '',
                'cardNumber' => '',
                'expiryDate' => '',
                'cvv' => '',
                'zip' => '',
                'country' => 'mr',
                'billingSame' => false,
                'paymentMethod' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'first_name' => 'HESSOU',
                'last_name' => 'Youssef',
                'phone' => '0636293377',
                'email' => 'yousef@gmail.com',
                'password' => '987654321',
                'nameOnCard' => '',
                'cardNumber' => '',
                'expiryDate' => '',
                'cvv' => '',
                'zip' => '',
                'country' => 'mr',
                'billingSame' => false,
                'paymentMethod' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
               
                'first_name' => 'hodawi',
                'last_name' => 'Youssef',
                'phone' => '07777777',
                'email' => 'hodq@gmail.com',
                'password' => '45500000',
                'nameOnCard' => '',
                'cardNumber' => '',
                'expiryDate' => '',
                'cvv' => '',
                'zip' => '',
                'country' => 'mr',
                'billingSame' => false,
                'paymentMethod' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'first_name' => 'rached',
                'last_name' => 'ahmed',
                'phone' => '0888888888',
                'email' => 'rached@gmail.com',
                'password' => '0000000',
                'nameOnCard' => '',
                'cardNumber' => '',
                'expiryDate' => '',
                'cvv' => '',
                'zip' => '',
                'country' => 'mr',
                'billingSame' => false,
                'paymentMethod' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
