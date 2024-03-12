<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use jcobhams\NewsApi\NewsApi;

class LiveNews extends BaseController
{
    public function index()
    {
        $newsapi = new NewsApi(getenv('NEWS_API_KEY'));
        $response = $newsapi->getTopHeadlines(null, null, 'us', null, null, null);
        if ($response->status === 'error') {
            throw new PageNotFoundException($response->message);
        }

        if (empty($response->articles)) {
            throw new PageNotFoundException('No news found');
        }

        $data = [
            'news'  => $response->articles,
            'title' => 'Live News',
        ];

        return view('templates/header', $data)
            . view('live/index')
            . view('templates/footer');
    }
}
