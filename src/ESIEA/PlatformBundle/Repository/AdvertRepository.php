<?php
// src/ESIEA/PlatformBundle/Repository/AdvertRepository.php
namespace ESIEA\PlatformBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
class AdvertRepository extends EntityRepository
{
  public function getAdvertsBefore(\Datetime $date)
  {
    return $this->createQueryBuilder('a')
      ->where('a.updatedAt <= :date')                      
      ->orWhere('a.updatedAt IS NULL AND a.date <= :date') 
     
      ->setParameter('date', $date)
      ->getQuery()
      ->getResult()
      ;
  }
  public function getAdverts($page, $nbPerPage)
  {
    $query = $this->createQueryBuilder('a')
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;
    $query
      ->setFirstResult(($page-1) * $nbPerPage)
      ->setMaxResults($nbPerPage)
    ;
    return new Paginator($query, true);
  }
  public function myFindAll()
  {
    $queryBuilder = $this->createQueryBuilder('a');
    $query = $queryBuilder->getQuery();
  
    $results = $query->getResult();
    return $results;
  }
  public function myFind()
  {
    $qb = $this->createQueryBuilder('a');
  
    $qb
      ->where('a.author = :author')
      ->setParameter('author', 'Daniel')
    ;
    
    $this->whereCurrentYear($qb);
    
    $qb->orderBy('a.date', 'DESC');
    return $qb
      ->getQuery()
      ->getResult()
    ;
  }

  protected function whereCurrentYear(QueryBuilder $qb)
  {
    $qb
      ->andWhere('a.date BETWEEN :start AND :end')
      ->setParameter('start', new \Datetime(date('Y') . '-01-01')) // Date entre le 1er janvier de cette année
      ->setParameter('end', new \Datetime(date('Y') . '-12-31'))   // Et le 31 décembre de cette année
    ;
  }
}