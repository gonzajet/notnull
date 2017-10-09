<?php
namespace ProyectoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EstablecimientoRepository extends EntityRepository{
    public function findEstablecimientosBarrio($local){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:Establecimiento e '
                . 'WHERE e.localidad = :param';
        
        $consulta = $em->createQuery($query);
        $consulta->setParameter('param', $local);
        return $establecimientos = $consulta->getResult();
    }
    
    public function findEstablecimientosTodos(){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:Establecimiento e';
               
        $consulta = $em->createQuery($query);
        return $establecimientos = $consulta->getResult();
    }
    
}