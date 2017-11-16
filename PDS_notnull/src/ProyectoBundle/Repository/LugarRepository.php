<?php
namespace ProyectoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LugarRepository extends EntityRepository{
    
    public function findLugar($id){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:Lugar e '
                . 'WHERE e.id = :param';
        
        $consulta = $em->createQuery($query);
        $consulta->setParameter('param', $id);
        return $lugares = $consulta->getResult();
    }
    
    
    public function findOneByIdJoinedToSeccion($lugarId)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT l, s FROM ProyectoBundle:Lugar l
                           JOIN l.seccion_lugar s
                           WHERE l.id = :id'
        )->setParameter('id', $lugarId);
        try 
        {
            return $query->getSingleResult();
        } 
        catch (\Doctrine\ORM\NoResultException $e) 
        {
            return null;
        }
   }
   
   public function findAllJoinedToSeccion()
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT l, s FROM ProyectoBundle:Lugar l
                           JOIN l.seccion_lugar s'
                         );
        try 
        {
            return $query->getSingleResult();
        } 
        catch (\Doctrine\ORM\NoResultException $e) 
        {
            return null;
        }
   }
   
    
    public function findLugaresTodos(){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:Lugar e';
               
        $consulta = $em->createQuery($query);
        return $lugares = $consulta->getResult();
    }
    
    public function findSeccion($id){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:SeccionLugar e '
                . 'WHERE e.id = :param';
        
        $consulta = $em->createQuery($query);
        $consulta->setParameter('param', $id);
        return $consulta->getResult();
    }
    
}