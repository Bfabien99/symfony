<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    #[Route('/movies', name: 'movies_show')]
    public function index(): Response
    {   
        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->findAll();

        return $this->render('movies/index.html.twig',['movies' => $movies]);
    }

    #[Route('/movies/{id}', name: 'movies')]
    public function show($id): Response
    {   
        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->find($id);

        return dd($movies);
    }
}
