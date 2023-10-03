<?php

namespace Database\Seeders;

use App\Models\Post;

use Database\Seeders\Traits\DisableForeignKey;
use Database\Seeders\Traits\EnableForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, EnableForeignKey, DisableForeignKey;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->DisableFk();
        $this->truncate('posts');
        Post::factory(5)->setTitle()->create();
        $this->EnableFk();        //
    }
}
