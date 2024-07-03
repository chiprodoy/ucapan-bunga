<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $siteMap=SitemapGenerator::create(config('app.url'))->getSitemap();
        $keywords = explode(',',env('KEYWORDS'));

        foreach($keywords as $keyword){

            $keyword=str_replace(' ','-',$keyword);

            $siteMap->add(Url::create('/cari/'.$keyword)
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.5));
        }


        $siteMap->writeToFile(public_path('sitemap.xml'));
        $this->info('Sitemap generated successfully.');
    }
}
