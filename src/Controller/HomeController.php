<?php

namespace App\Controller;

use App\Entity\Products;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="index")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Products::class);
        $products = $repo->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $products

            
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home/home.html.twig', [
            'title' => "Bienvenue sur la page d'acceil!",
            'age' => 1,
        ]);

    }

    /**
     * @Route("/home/{id}", name="home_show")
     */

    public function show($id){
        $repo = $this->getDoctrine()->getRepository(Products::class);
        $products = $repo->find($id);
        return $this->render('home/show.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $products

            ]);
    }

}
