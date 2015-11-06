<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/index.php", name="ac_media_accueil")
     * @Template()
     */
    public function indexAction()
    {
         return array(
                // ...
            ); 
        
    }
}
