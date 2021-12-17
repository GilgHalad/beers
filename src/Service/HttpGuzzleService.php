<?php 
namespace App\Service;

use GuzzleHttp\Client;
use App\Model\Exception\Food\FoodNotSend;

class HttpGuzzleService
{
    public function connection($request)
    {            
        $food = $request->get('food');
        if (!$food) {
            FoodNotSend::throwException();
        }
        $client = new Client();
        $data = $client->request('GET', 'https://api.punkapi.com/v2/beers?food='.$food);
        $response =($data ->getBody()->getContents());
        return $response;
    }
}
?>