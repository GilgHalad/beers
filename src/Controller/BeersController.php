<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ResponseInterface;
use App\Service\HttpGuzzleService;
use App\Entity\Beer;
use Symfony\Component\Serializer\Serializer;

class BeersController extends AbstractController
{
    /**
     * @Route("/beers/list",name="beers_list")
     */
    public function list(HttpGuzzleService $httpGuzzleService, Request $request)
    {       
        $beers=[];
        $data = self::configHttp($httpGuzzleService, $request);
        foreach ($data as $key => $value) {
        $beer = new Beer($data[$key]);
        $beerResponse=[
            "id" => $id = $beer->getId(),
            "name" => $name = $beer->getName(),
            "description" => $description = $beer->getDescription()
            ];
        array_push($beers, $beerResponse);
        }
        $response = new JsonResponse();            
        $response->setData($beers);
        return $response;
    }

    /**
     * @Route("/beers/view",name="beers_view")
     */
    public function view(HttpGuzzleService $httpGuzzleService, Request $request)
    {       
        $beers=[];
        $data = self::configHttp($httpGuzzleService, $request);
        foreach ($data as $key => $value) {
        $beer = new Beer($data[$key]);
        $beerResponse=[
            "id" => $id = $beer->getId(),
            "name" => $name = $beer->getName(),
            "description" => $description = $beer->getDescription(),
            "image_url"   => $image_url = $beer->getImageUrl(),
            "tagline" => $tagline = $beer->getTagline(),
            "first_brewed" => $first_brewed = $beer->getFirstBrewed()
            ];
        array_push($beers, $beerResponse);
        }
    return $this->render('beer.html.twig',['listados' => $beers]);
    }

    private function configHttp($httpGuzzleService, $request)
    {
        $serializer = new Serializer();
        $result = $httpGuzzleService->connection($request);
        $data = json_decode($result, true);
        return $data;
    }
}
?>