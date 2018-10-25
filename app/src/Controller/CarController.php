<?php

namespace Internship\Controller;

use Internship\Form\CarType;
use Internship\Repository\CarRepository;
use Internship\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Car controller.
 *
 * @Route("/admin/car")
 *
 */
class CarController extends Controller
{
    /**
     * @Route("/", name="car_index", methods="GET")
     * @param CarRepository $carRepository
     * @return Response
     */
    public function index(CarRepository $carRepository): Response
    {
        return $this->render('car/index.html.twig', ['cars' => $carRepository->findAll()]);
    }

    /**
     * Promote a car
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/promote/{id}", name="car_promote", methods="GET")
     */
    public function promote($id)
    {
        $dataChecker = $this->get('car.data_checker');
        $em = $this->getDoctrine()->getManager();

        $car = $em->getRepository(Car::class)->find($id);

        $result = $dataChecker->checkCar($car);
        if($result)
        {
            $this->addFlash('success', 'Car promoted');
        } else {
            $this->addFlash('warning', 'Car not applicable');
        }

        return $this->redirectToRoute("car_index");
    }

    /**
     * @Route("/new", name="car_new", methods="GET|POST")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();

            return $this->redirectToRoute('car_index');
        }

        return $this->render('car/new.html.twig', [
            'car' => $car,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="car_show", methods="GET")
     * @param int $id
     * @return Response
     */
    public function show($id): Response
    {
        $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
        return $this->render('car/show.html.twig', ['car' => $car]);
    }

    /**
     * @Route("/{id}/edit", name="car_edit", methods="GET|POST")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function edit(Request $request, $id): Response
    {
        $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('car_edit', ['id' => $car->getId()]);
        }

        return $this->render('car/edit.html.twig', [
            'car' => $car,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="car_delete", methods="DELETE")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function delete(Request $request, $id): Response
    {
        $car = $this->getDoctrine()->getRepository(Car::class)->find($id);
        if ($this->isCsrfTokenValid('delete'.$car->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($car);
            $em->flush();
        }

        return $this->redirectToRoute('car_index');
    }
}
