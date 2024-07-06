<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'uuid'=>'-',
            'title'=>'Coba Judul Content',
            'slug'=>'',
            'cover'=>'product1.jpg',
            'content'=>'Coba Content',
            'author_id'=>1
        ]);
    }
}
