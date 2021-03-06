<?php

namespace AppBundle\Repository;

/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends \Doctrine\ORM\EntityRepository
{


    public function  getTasks()
    {

        return $this->createQueryBuilder('t')
            ->select('t')
            ->andWhere('where t.status = "open" ')
            ->getQuery()
            ->getResult();
    }

    public function  getTask($id)
    {
        return $this->createQueryBuilder('t')
            ->select('t')
            ->where('t.id = :id')
            ->setParameter(':id',$id)
            ->getQuery()
            ->getOneOrNullResult();
    }



}
