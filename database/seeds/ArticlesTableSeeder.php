<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ( !DB::table('pweb_articles')->where('title', 'Welcome' )->exists() )
        {
            DB::table('pweb_articles')->insert([
                'author' => 1024,
                'title' => 'Welcome',
                'content' => '<p>Congratulations on successfully installing your PW Web! Browse around and get a feel for everything! If you have any questions or issues please don\'t hesitate to post them on <a href="https://github.com/ilhaaam/pw-web/issues" target="_blank" data-toggle="tooltip" data-placement="top" title="Ilham Susanto">github!</a> or ask me by <a href="https://t.me/i_sst" target="_blank" data-toggle="tooltip" data-placement="top" title="Ilham Susanto">Telegram</a>, or <a href="https://m.me/ilhamsst13" target="_blank" data-toggle="tooltip" data-placement="top" title="Ilham Susanto">Messenger</a>.</p>',
                'category' => 'other',
                'slug' => 'welcome',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
