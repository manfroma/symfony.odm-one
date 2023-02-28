<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Document\Product;
use Doctrine\ODM\MongoDB\DocumentManager;

#[Route('/-q-pg-')]
class QPgController extends AbstractController
{
    // #[Route('/pg', name: 'app_pg')]
    // public function index(): JsonResponse
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PgController.php',
    //     ]);
    // }
    private $dm; 

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    #[Route('/')]
    public function index(): Response
    {
        return new Response('Hello, You are in -q-pg- home ');
    }


    #[Route('/products')]
    #[Route('/products/ls')]
    #[Route('/products/ls/selt')]
    public function seltProductsLs(Request $request): Response
    {
        $rep = $this->dm->getRepository(Product::class);
        $products = $rep->findAll();
        dd($products);

        return new Response("list of products");
    }

    #[Route('/products/ls/inst')]
    public function instProductsLs(Request $request): Response
    {
        return new Response("returns a form for get ");
    }

    #[Route('/products/ls/updt')]
    public function updtProductsLs(Request $request): Response
    {
        return new Response("list of products");
    }


    #[Route('/products/ls/delt', methods: ['POST'])]
    public function deltProductsLs(Request $request): Response
    {
        return new Response("list of products");
    }

    #[Route('/products/ls/{act}', methods: ['POST'])]
    public function actProductsLs(Request $request, string $act): Response
    {
        return new Response("list of products");
    }
}
