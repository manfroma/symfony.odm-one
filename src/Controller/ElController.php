<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ElActions{
    /**
     * Execute targeted module code and returns results or AlertObject for acknolegement. 
     */
    private static function exec(){

    }
    public static function selt(){

    }


    /**
     * only requires id and url, 
     * 
     */
    public static function delt(){

    }
}



/**
 * 
 * it
 * ls
 * 
 */
#[Route('/-q-el-')]
class ElController extends AbstractController
{
    #[Route('/el', name: 'app_el')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ElController.php',
        ]);
    }

    #[Route('/it/{act}', defaults:['act'=>'sel'], name: 'it', methods: ['GET', 'POST'])]
    public function it($act): Response{

        $response = null;
        switch($act){
            case 'selt':

                break; 
            case 'delt':
                break;
            case 'updt':
                break;
            default: 
                $response = new Response('')
        }
        

    }



}
