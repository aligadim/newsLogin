<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Login::where('email','admin@gmail.com')->exists())
        {
            Login::create([
                'id' => 1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345')
            ]);
        }
    }
}
