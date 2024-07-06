<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Product;
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
        $keywords = $this->getKeywords();

        foreach($keywords as $keyword){

            $keyword=str_replace(' ','-',$keyword);

            $siteMap->add(Url::create('/cari/'.$keyword)
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.8));
        }


        $siteMap->writeToFile(public_path('sitemap.xml'));
        $this->info('Sitemap generated successfully.');
    }

    public function getKeywords(){
        $keywords = explode(',',env('KEYWORDS'));

        $products = Product::all();

        foreach($products as $key => $val){
            if(!empty($val->meta_keyword)){
                $metaKeyword=explode(',',$val->meta_keyword);
                foreach($metaKeyword as $k => $v){
                    array_push($keywords,str_replace(' ','-',ltrim($v)));
                }
            }
        }

        $blogs = Blog::all();

        foreach($blogs as $key => $val){
            if(!empty($val->meta_keyword)){
                $metaKeyword=explode(',',$val->meta_keyword);
                foreach($metaKeyword as $k => $v){
                    array_push($keywords,str_replace(' ','-',ltrim($v)));
                }
            }
        }
        return array_unique($keywords);
    }

}
