<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\Product;
use Symfony\Component\HttpFoundation\Request;

class ProductPageActions{

    public static function ins(DocumentManager $dm): Response{
        $product = new Product();
        $product->setName("Joy");
        $product->setDescription("The <strong>pleasant things of yesterday</strong>");
        $dm->persist($product);
        $dm->flush();  
        
        return new Response("document {$product->getId()} has been added");
    }

}







class IndexController extends AbstractController
{
    private $dm;

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }


    #[Route('/index', name: 'app_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IndexController.php',
        ]);
    }

    #[Route('/product/ls/{actName}', defaults: ['actName' => 'sel'], name: 'list_product')]
    public function productLs($actName): Response
    {
        // 
        return new Response("{$actName} on a list of products");
    }


    #[Route('/product/it/{actName}', defaults: ['actName' => 'sel'], name: 'ins_product')]
    public function productIt($actName, DocumentManager $dm, Request $req): Response
    {
        $response = null; 

        switch($actName){
            case 'sel':
                $id = $req->get('id');
                if($id){
                    $product = $dm->getRepository(Product::class)->find($id);
                    $response = new Response("Here is the item of {$product->getName()}");
                }else{
                    $response = new Response('An id has to be specified');
                }
                break;
            case 'ins':
                $response = ProductPageActions::ins($this->dm, $req);
                break; 
            case 'upd':
                $response = new Response('This is upd');
                break;
            default: 
                $response = new Response(" No ACTION");       
        }

        return $response;
    }


}   
