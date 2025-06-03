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
                'password' => Hash::make('123456789'),
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
                'password' => Hash::make('123456789'),
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
                'password' => Hash::make('123456789'),
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
                'password' => Hash::make('123456789'),
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
                
                'first_name' => 'mohamed',
                'last_name' => 'azoz',
                'phone' => '0888888888',
                'email' => 'azoz@gmail.com',
                'password' => Hash::make('123456789'),
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
            ],   [
                
                'first_name' => 'amire',
                'last_name' => 'amrani',
                'phone' => '0888888888',
                'email' => 'amrani@gmail.com',
                'password' => Hash::make('123456789'),
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
            ],   [
                
                'first_name' => 'ahlam',
                'last_name' => 'hnawaat',
                'phone' => '0888888888',
                'email' => 'ahlam@gmail.com',
                'password' => Hash::make('123456789'),
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
            ],   [
                
                'first_name' => 'abdo',
                'last_name' => 'chaker',
                'phone' => '0888888888',
                'email' => 'chaker@gmail.com',
                'password' => Hash::make('123456789'),
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
                
                'first_name' => 'aisam',
                'last_name' => 'atmani',
                'phone' => '0888888888',
                'email' => 'aisam@gmail.com',
                'password' => Hash::make('123456789'),
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
