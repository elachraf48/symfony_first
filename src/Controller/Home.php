<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController {
     /**
     * @Route("/")
     */
    public function index()
    {
        $posts=[
            [
                'id'=>1,
                'title'=>'achraf',
                'body'=>'im here'
            ],
            [
                'id'=>1,
                'title'=>'zaki',
                'body'=>'im poor'
            ],
            [
                'id'=>1,
                'title'=>'hcham',
                'body'=>'im not here'
            ]
        ]
        ;
        return $this->render('index.html.twig',[
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/add",name="post_add")
     */
    public function add()
    {
        return new Response(
            'add post'
        );
    }
}

// src/Controller/LuckyController.php
// namespace App\Controller;

// use Symfony\Component\HttpFoundation\Response;

// class Home
// {
//     // #[Route('/   /number/{max}', name: 'app_lucky_number')]
//     public function number(int $max): Response
//     {
//         $number = random_int(0, $max);

//         return new Response(
//             '<html><body>Lucky number: '.$number.'</body></html>'
//         );
//     }
// }


?>