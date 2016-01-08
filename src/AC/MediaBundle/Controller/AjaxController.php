<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function sampleAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:ThemeDuMois")->findAll();
        
         $output = array();
        foreach ($entities as $member) {
            $output[] = array(
                'id' => $member->getId(),
                'theme' => $member->getTheme(),
            );
        }

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($output));
        return $response;  
    
    }

    public function uploadFileAction()
    {
        $entity = new \AC\MediaBundle\Entity\Sample();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\SampleType(), $entity);
        
        return $this->render('ACMediaBundle:Ajax:uploadFile.html.twig', array(
                'form'=>$form->createView()
            ));    }

}
