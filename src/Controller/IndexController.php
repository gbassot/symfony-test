<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use App\Repository\IdeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function number(IdeeRepository $ideeRepository): Response
    {


        return $this->render('homepage.html.twig', ['ideas' => $ideeRepository->findAll()]);
    }
}
