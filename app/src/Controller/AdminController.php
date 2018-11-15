<?php

namespace Internship\Controller;

use Internship\Repository\ContactRepository;
use Internship\Service\FileUploader;
use Internship\Entity\Product;
use Internship\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 */
class AdminController extends AbstractController
{
    /**
     * Add product
     *
     * @param Request $request
     * @param FileUploader $fileUploader
     * @return Response
     */
    public function addProduct(Request $request, FileUploader $fileUploader)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $product->getImageFile();
            $fileName = $fileUploader->upload($file);

            $product->setImages($fileName);

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
     * @param FileUploader $fileUploader
     * @param $id
     * @return Response
     */
    public function editProduct(Request $request, FileUploader $fileUploader, $id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $product->getImageFile();
            $fileName = $fileUploader->upload($file);

            $product->setImages($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('product', array('id' => $product->getId()));
        }

        return $this->render('admin/edit_product.html.twig', array('form' => $form->createView()));
    }

    /**
     * Delete product
     *
     * @param Product $product
     * @return Response
     */
    public function deleteProduct(Product $product)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('products');
    }

    /**
     * Read message
     *
     */
    public function messages()
    {
        /**
         * @var $contactRepository ContactRepository
         */
        $contactRepository = $this->getDoctrine()->getRepository('Internship:Contact');
        $messages = $contactRepository->findAll();

        return $this->render('admin/message.html.twig', ['messages' => $messages]);
    }
}
