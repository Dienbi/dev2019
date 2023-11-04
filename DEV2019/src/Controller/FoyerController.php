<?php

namespace App\Controller;

use App\Repository\FoyerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoyerController extends AbstractController
{
    #[Route('/foyer', name: 'app_foyer')]
    public function index(): Response
    {
        return $this->render('foyer/index.html.twig', [
            'controller_name' => 'FoyerController',
        ]);
    }
    #[Route('/Affiche', name: 'Affiche')]
    public function Affiche (FoyerRepository $rep)
        {
            $foyer=$rep->findAll() ; 
            return $this->render('foyer/Affiche.html.twig',['foyer'=>$foyer]);
        }
}
