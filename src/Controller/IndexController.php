<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IndexController.php',
        ]);
    }

    #[Route('/product/ls', name: 'list_product')]
    public function listProduct(): Response{
        // 

        return new Response('oks');
    }

    #[Route('/product/it/ins', name: 'ins_product')]
    public function insProduct(): Response{
        // insert to non existing 
        

        return new Response('product added');
    }

    #[Route('/product/it/sel', name: 'sel_product')]
    public function selProduct(): Response{
        // insert to non existing 
        
        return new Response('product selected');
    }

    #[Route('/product/it/del', name: 'del_product')]
    public function delProduct(): Response{
        // insert to non existing 
        
        return new Response('product deleted');
    }




}   
