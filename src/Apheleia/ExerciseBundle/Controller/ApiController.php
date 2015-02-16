<?php

namespace Apheleia\ExerciseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ApiController extends Controller
{
    /**
     * @Route("/api/list/{id}", methods={"GET"})
     * @param int $id the id of the list
     * @return Response
     */
    public function indexAction($id)
    {
        return new Response('List (ID ' . $id . ')');
    }
}
