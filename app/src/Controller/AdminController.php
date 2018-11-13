<?php

namespace Internship\Controller;

use Internship\Entity\Product;
use Internship\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @return Response
     */
    public function addProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product', array('id' => $product->getId()));
        }

        return $this->render('admin/add_product.html.twig', ['product' => $product, 'form' => $form->createView()]);
    }

    /**
     * Edit product
     *
     * @param Request $request
     * @return Response
     *
     */
    public function editProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('product', array('id' => $product->getId()));
        }

        return $this->render('admin/edit_product.html.twig', array('form' => $form->createView()));
    }

    /**
     * Delete product
     *
     * @param $id
     * @return Response
     */
    public function deleteProduct($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('product', array('id' => $product->getId()));
    }
}
