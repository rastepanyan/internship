<?php

namespace Internship\Repository;

use Internship\Entity\Orderline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Orderline|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orderline|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orderline[]    findAll()
 * @method Orderline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderlineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Orderline::class);
    }
}
