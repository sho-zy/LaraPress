<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WpCommentmetaSeeder::class);
        $this->call(WpCommentsSeeder::class);
        $this->call(WpLinksSeeder::class);
        $this->call(WpOptionsSeeder::class);
        $this->call(WpPostmetaSeeder::class);
        $this->call(WpPostsSeeder::class);
        $this->call(WpTermsSeeder::class);
        $this->call(WpTermRelationshipsSeeder::class);
        $this->call(WpTermTaxonomySeeder::class);
        $this->call(WpUsermetaSeeder::class);
        $this->call(WpUsersSeeder::class);
    }
}
