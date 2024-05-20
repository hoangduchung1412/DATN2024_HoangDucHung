<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Weidner\Goutte\GoutteFacade;
use DB;

class ScrapePost extends Command
{
    protected $signature = 'scrape:ScrapePost';
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $linksToScrape = [
            'https://tintuconline.com.vn/vnn/the-gioi/'
        ];

        foreach ($linksToScrape as $link) {
            $this->scrapeData($link);
        }
    }
    
    public function scrapeData($url)
    {
        $crawler = GoutteFacade::request('GET', $url);

        $linkPost = $crawler->filter('h3.cate-24h-foot-home-latest-list__name a')->each(function ($node) {
            return $node->attr("href");
        });

        foreach ($linkPost as $link) {
            $this->scrapePostData($link);
        }
    }
    
    public function scrapePostData($url)
    {
        
        $crawler = GoutteFacade::request('GET', $url);
        $title = $this->crawlData('h1#article_title', $crawler);
        $description = $this->crawlData('h2#article_sapo', $crawler);
        $content = $this->crawlData('article.cate-24h-foot-arti-deta-info', $crawler);
        $images = $this->crawlImages('img.news-image', $crawler); // Crawling images

        // Insert into database
        $dataPost = [
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'image_list' => json_encode($images), 
        ];

        DB::table('posts')->insert($dataPost);
    }

    protected function crawlData(string $type, $crawler)
    {
        $result = $crawler->filter($type)->each(function ($node) {
            return $node->text();
        });

        if(!empty($result)) {
            return $result[0];
        }

        return '';
    }
    protected function crawlImages(string $type, $crawler)
    {
        $images = $crawler->filter($type)->each(function ($node) {
            return $node->attr('src');
        });

        return $images;
    }
}
