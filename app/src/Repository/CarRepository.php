<?php

namespace Internship\Repository;

use Internship\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Car|null find($id, $lockMode = null, $lockVersion = null)
 * @method Car|null findOneBy(array $criteria, array $orderBy = null)
 * @method Car[]    findAll()
 * @method Car[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Car::class);
    }
    /**
     * @return Car[] Returns an array of Car objects
     */
    public function findCarsWithDetails() {
        $qb = $this->createQueryBuilder('c');
        $qb->select('c, make, model');
        $qb->join('c.make', 'make');
        $qb->join('c.model', 'model');
        return $qb->getQuery()->getResult();
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findCarsWithDetailsById($id) {
        $qb = $this->createQueryBuilder('c');
        $qb->select('c, make, model');
        $qb->join('c.make', 'make');
        $qb->join('c.model', 'model');
        $qb->where('c.id = :id');
        $qb->setParameter('id', $id);
        return $qb->getQuery()->getSingleResult();
    }
}
