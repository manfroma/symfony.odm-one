<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



/**
 * 
 * it
 * ls
 * 
 */
#[Route('/-q-el-')]
class QElController extends AbstractController
{



    // #[Route('/el', name: 'app_el')]
    // public function index(): JsonResponse
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/ElController.php',
    //     ]);
    // }

    #[Route('/')]
    public function index():Response{
        return new Response('You are home');
    }

    
    ## > ls SIDU actions
    #[Route('/ls')]
    #[Route('/ls/selt', name: 'selt_ls')]
    public function seltLs(Request $request): Response{
        return new Response('selt ls');
    }

    #[Route('/ls/inst', name: 'inst_ls')]
    public function instLs(Request $request): Response{
        return new Response('inst ls');
    }

    #[Route('/ls/updt', name: 'updt_ls')]
    public function updtLs(Request $request): Response{
        return new Response('delt ls');
    }

    #[Route('/ls/delt', name: 'delt_ls')]
    public function deltLs(Request $request): Response{
        return new Response('delt ls');
    }

    #[Route('/ls/{act}', name: 'act_ls')]
    public function actLs(Request $request): Response{
        $url = "";
        return new Response("act ls");
    }

    ## < ls SIDU actions

    ## > it SIDU actions
    public function seltIt(Request $request): Response{
        return new Response('selt it');
    }

    public function instIt(Request $request): Response{
        return new Response('inst it');
    }

    public function updtIt(Request $request): Response{
        return new Response('updt it');
    }

    public function deltIt(Request $request): Response{
        return new Response('delt it');
    }

    public function actIt(Request $request): Response{
        return new Response('act it');
    }
    ## < it SIDU actions 
}
