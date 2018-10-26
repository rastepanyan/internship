<?php

namespace Internship\Controller\Main;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{

    /**
     * Home page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('main/controller/default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
