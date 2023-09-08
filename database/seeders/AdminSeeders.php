<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photoPath = 'img/mouad.png';
        $photoUrl = Storage::url($photoPath);
        Storage::copy('img/mouad.png', $photoPath);
        User::create([
            'name' => 'admin',
            'isAdmin' => true,
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'profession_id' => '2',
            'password' => Hash::make('admin1234'),
'upload' =>$photoUrl,
        ]);

    }
}
