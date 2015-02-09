<?php

namespace Vendor\SomeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     * @param string $name
     * @return array
     */
    public function indexAction($name)
    {
        return $this->render('VendorSomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
