<?php

namespace Internship\Service;

use Internship\Entity\Car;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\OptimisticLockException;

/**
 * Class DataChecker
 *
 * @package Internship\Service
 *
 */
class DataChecker
{
    /**
     * @var EntityManager
     *
     */
    protected $entityManager;

    /**
     * @var boolean
     *
     */
    protected $requireImagesToPromoteCar;

    /**
     * DataChecker constructor
     *
     * @param EntityManager $entityManager
     * @param $requireImagesToPromoteCar
     */

    public function __construct(EntityManager $entityManager, $requireImagesToPromoteCar)
    {
        $this->entityManager = $entityManager;
        $this->requireImagesToPromoteCar = $requireImagesToPromoteCar;
    }

    /**
     * @param Car $car
     * @return bool
     * @throws \Doctrine\ORM\ORMException
     * @throws OptimisticLockException
     */
    public function checkCar(Car $car)
    {
        $promote = true;
        if ($this->requireImagesToPromoteCar) {
            $promote = false;
        }

        $car->setPromote($promote);
        $this->entityManager->persist($car);
        $this->entityManager->flush();
        return $promote;
    }
}
