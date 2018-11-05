<?php

namespace Internship\Controller;

use Internship\Repository\MessageRepository;
use Internship\Repository\ProductRepository;
use Internship\Repository\UserRepository;
use Internship\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function products()
    {
        /**
         * @var $productRepository ProductRepository
         */
        $productRepository = $this->getDoctrine()->getRepository('Internship:Product');
        $products = $productRepository->findAll();

        return $this->render('products/product_list.html.twig', ['products' => $products]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function product($id)
    {
        /**
         * @var $productRepository ProductRepository
         */
        $productRepository = $this->getDoctrine()->getRepository('Internship:Product');
        $product = $productRepository->find($id);

        return $this->render('products/product.html.twig', ['product' => $product]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function users()
    {
        /**
         * @var $userRepository UserRepository
         */
        $userRepository = $this->getDoctrine()->getRepository('Internship:User');
        $users = $userRepository->findAll();

        return $this->render('orders/order_list.html.twig', ['users' => $users]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function orders()
    {
        /**
         * @var $orderRepository OrderRepository
         */
        $orderRepository = $this->getDoctrine()->getRepository('Internship:Order');
        $orders = $orderRepository->findAll();


        return $this->render('orders/order_list.html.twig', ['orders' => $orders]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function order($id)
    {
        /**
         * @var $orderRepository OrderRepository
         */
        $orderRepository = $this->getDoctrine()->getRepository('Internship:Order');
        $order = $orderRepository->find($id);

        return $this->render('orders/order.html.twig', ['order' => $order]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cart()
    {

        return $this->render('home/cart.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function messages()
    {
        /**
         * @var $messageRepository MessageRepository
         */
        $messageRepository = $this->getDoctrine()->getRepository('Internship:Message');
        $messages = $messageRepository->findAll();

        return $this->render('home/contacts.html.twig', ['messages' => $messages]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        return $this->render('home/login.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function signUp()
    {
        return $this->render('home/sign_up.html.twig');
    }
}
