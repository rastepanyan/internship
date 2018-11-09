<?php

namespace Internship\Controller;

use Internship\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * Add product
     *
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('Internship\Form\ProductType', $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return$this->redirectToRoute('product', array('id' => $product->getId()));
        }

        return array(
            'product' => $product,
            'form' => $form->createView(),
        );
    }
}
