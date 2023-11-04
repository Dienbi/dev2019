<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ChambreController extends AbstractController
{
    #[Route('/chambre', name: 'app_chambre')]
    public function index(): Response
    {
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }
    #[Route('/addF', name: 'addF')]
        public function addF(ManagerRegistry $mr, ChambreRepository $repo,Request $req): Response
        {
            $s=new Chambre();   // 1- instance
            $form=$this->createForm(ChambreType::class,$s);//2- creation formulaire 
            $form->handleRequest($req); //anlasyser la requette http et récuperer les données 
            if($form->isSubmitted())
            {
                $em=$mr->getManager();    //3- persist+flush
                $em->persist($s);
                $em->flush();
                return $this->redirectToRoute('Affiche');
            };
    
            return $this->render('chambre/add.html.twig',[
                'f'=>$form->createView()
            ]);
        }
        #[Route('/listByFoyer', name: 'listF')]
public function listChambreByFoyer(ChambreRepository $chambreRepository)
{
    $chambre = $chambreRepository->chambreListByfoyer();

    return $this->render('chambre/list_by_foyer.html.twig', [
        'chambre' => $chambre,
    ]);
}
}
