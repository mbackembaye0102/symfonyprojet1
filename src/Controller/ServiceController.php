<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use App\Entity\Service;
use App\Entity\Employe;
use App\Controller\Collection;
use  Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="service")
     */
    public function index()
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    /**
     * @Route("/service/newservice", name="create_service")   
     *  @Route("/service/{id}/modifservice", name="edit_service")

     */
    public function createService( Service $service=null, Request $requete, ObjectManager $manager )
    {
        if(!$service){
                    $service =new Service();
        }        

        $repo=$this->getDoctrine()->getRepository(Service::class);
        $services=$repo->findAll();

        $form=$this->createFormBuilder($service)
        ->add('libelle')
        ->getForm();

        $form->handleRequest($requete);
        if($form->isSubmitted() && $form->isValid()){
                $manager->persist($service);
                $manager->flush();
                $this->addFlash('success', 'Service enregistrer avec succés');
                return $this->redirectToRoute('create_service', [
                    'id'=>$service->getId()
                ]);

        }
        return $this->render('service/service.html.twig', [
            'formService' => $form->createView(),
            'services' => $services,
            'editMode' => $service->getId()!==null
            
            
        ]);
     
        return $this->render('create_service');
       

    }
  /**
     * @return Collection|employe[]
     */
    public function getEmploye():Collection{

        return $this->employe;

    }

    /**
     * @Route("/service/newemploye", name="create_employe")
     * @Route("/service/{id}/modifemploye", name="edit_employe")
     */
    public function createEmploye(Employe $employe=null,  Request $requete, ObjectManager $manager)
    {
        if(!$employe){
            $employe =new Employe();
        }     

            

        $repo=$this->getDoctrine()->getRepository(Employe::class);
        $employes=$repo->findAll();

        $form=$this->createFormBuilder($employe)
        ->add('matricule')
        ->add('nom')
        ->add('datenaissance',DateType::class,[
            'widget'=>'single_text',
            'format'=> 'yyyy-MM-dd'
        ])
        ->add('salaire')
        ->add('idService' ,EntityType::class, [
            'class'=>Service::class, 
            'choice_label'=>'libelle'
        ]) 
        ->getForm();

        $form->handleRequest($requete);
        if($form->isSubmitted() && $form->isValid()){
                $manager->persist($employe);
                $manager->flush();
                $this->addFlash('success', 'Employé enregistrer avec succés');
                return $this->redirectToRoute('create_employe');

        }

        return $this->render('service/employe.html.twig',[
            
                'formEmploye' => $form->createView(),
                'employes' => $employes,
                'editEmploye' => $employe->getId()!==null
    
                
            
        ]);
        return $this->render('create_employe');
    }

    //  /**
    //  *  @Route("/service/{id}/modifservice", name="edit_service")
    //  */

    // public function editService(Service $service=null, Request $requete, ObjectManager $manager )
    // {
    //     if(!$service){
    //         $service =new Service();
    //     }

    //     $repo=$this->getDoctrine()->getRepository(Service::class);
    //     $services=$repo->findAll();

    //     $form=$this->createFormBuilder($service)
    //     ->add('libelle')
    //     ->getForm();

    //     $form->handleRequest($requete);
    //     if($form->isSubmitted() && $form->isValid()){
    //             $manager->persist($service);
    //             $manager->flush();

    //     }
    //     return $this->render('service/editservice.html.twig', [
    //         'formService' => $form->createView(),
    //         'services' => $services,
    //         'editMode' => $service->getId()!==null

            
    //     ]);
    //     return $this->render('create_service');

    // }

 /**
     * @Route("/service/{id}/supservice", name="del_service")
     */
    public function supService(Service $service=null,  ObjectManager $manager)
    {
        

                $manager->remove($service);
                $manager->flush();
                $this->addFlash('danger', 'Service Supprimer avec succés');
                return $this->redirectToRoute('create_service', [
                    'id'=>$service->getId()
                ]);
        }

            /**
     * @Route("/service/{id}/supemploye", name="del_employe")
     */
    public function supEmploye(Employe $employe=null,  ObjectManager $manager)
    {
        

                $manager->remove($employe);
                $manager->flush();
                $this->addFlash('danger', 'Employé Supprimer avec succés');
                return $this->redirectToRoute('create_employe');
    }

        /**
     * @Route("/service/{id}/lister", name="lister")
     */
    public function lister(Employe $employe , ObjectManager $manager)
    {

        $repo=$this->getDoctrine()->getRepository(Employe::class);
        $employes=$repo->findByServie();
      
              
        return $this->render('service/lister.html.twig');

         
        }

    

      
    }




    
