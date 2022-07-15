<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(EntityManagerInterface $em): Response
    {   
        $repository = $em->getRepository(Movie::class);
        $movies = $repository->findAll();
        return $this->render('index.html.twig',['movies' => $movies]);
    }
}
