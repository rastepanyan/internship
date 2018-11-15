<?php

namespace Internship\Controller;

use Internship\Entity\Contact;
use Internship\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{

    /**
     * @param Request $request
     * @return Response
     */
    public function contact(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('contact', array('id' => $contact->getId()));
        }

        return $this->render('contact/contact.html.twig', ['contact' => $contact, 'form' => $form->createView()]);
    }
}
