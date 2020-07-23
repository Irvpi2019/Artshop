<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="index")
     */
    public function index(ProductsRepository $repo)
    {
        
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

        ]);

    }
    
    /**
     * @Route("/home/new", name="home_create")
     */

    public function create(){
        return $this->render('home/create.html.twig');
    }


    /**
     * @Route("/home/{id}", name="home_show")
     */

    public function show(Products $products){

        return $this->render('home/show.html.twig', [
            'products' => $products
            ]);
    }



}
