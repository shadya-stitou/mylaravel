<?php

namespace App\Http\Controllers;
use GuzzleHttp\client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class PaginateController extends Controller {

    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/laravel/ajaxcrud/public/api/admin/users', [
            'form_params' => [
                'client_id' => 'id',
                'title' => 'title',
                'description' => 'description',
            ]

        ]);
        
        echo $res->getBody();
        // {"type":"User"...'
}
}