<?php

namespace Internship\Controller\Extended;

use Internship\Entity\Car;
use Internship\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\Request;

class ExtendedController extends Controller
{
    /**
     * @Route("/our-cars", name="offer", methods={"GET"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        /**
         * @var CarRepository $carRepository
         */
        $carRepository = $this->getDoctrine()->getRepository(Car::class);
        $cars = $carRepository->findCarsWithDetails();
        $form = $this->createFormBuilder()
            ->setRequired(false)
            ->setMethod('GET')
            ->add('search', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2])
                ]
            ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            die("Form is submitted");
        }

        return $this->render('extended/controller/default/index.html.twig', [
            'cars' => $cars,
            'form' => $form->createView()
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @Route("/car/{id}", name="show_car", methods={"GET"})
     */
    public function show($id) {
        /**
         * @var CarRepository $carRepository
         */
        $carRepository = $this->getDoctrine()->getRepository(Car::class);
        $car = $carRepository->findCarsWithDetailsById($id);
        return $this->render('extended/controller/default/show.html.twig', ['car' => $car]);
    }
}
