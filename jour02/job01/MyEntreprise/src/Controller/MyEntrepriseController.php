<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    
    
    public function home()
    {
        return $this->render('MyEntreprise/home.html.twig',[
            'controller_name' => 'MyEntrepriseController',
        ]);
    }
    /**
     * @Route("/MyEntreprise", name="MyEntreprise")
     */
    public function index()
    {
        $projets = $this->getDoctrine()
        ->getRepository(Projets::class)
        ->findAll();

        return $this->render('MyEntreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
            'projets'=> $projets,
        ]);
    }

    

    /**
     * @Route("MyEntreprise/project/{id}", name="project_page")
     */
    public function projectPage($id)
    {
        $projets = $this->getDoctrine()
        ->getRepository(Projets::class)
        ->find($id);

        return $this->render('MyEntreprise/project_page.html.twig',[
            'controller_name' => 'MyEntrepriseController',
            'projets'=> $projets,
            
        ]);   
    }
}
