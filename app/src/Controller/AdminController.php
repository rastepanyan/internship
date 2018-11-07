<?php

namespace Internship\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    public function admin()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without permission');
        $user = $this->getUser();

        return new Response('Hello, '.$user->getFirstName());
    }
}
