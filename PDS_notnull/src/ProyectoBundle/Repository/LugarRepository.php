<?php

/**
 * Created by PhpStorm.
 * User: fede
 * Date: 05/11/17
 * Time: 10:59
 */


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
     
   
    public function findLugaresTodos(){
        $em = $this->getEntityManager();
        
        $query = 'SELECT e FROM ProyectoBundle:Lugar e';
               
        $consulta = $em->createQuery($query);
        return $lugares = $consulta->getResult();
    }
    
    
    /* Esta función nos permite encontrar los lugares
     * libres de un establecimiento dentro de una franja horaria
     * dependiendo lo que haya en la tabla de reservas
     */

    /**
     * @param $idEst
     * @param $fechaDesde
     * @param $fechaHasta
     * @return array
     */
    public function findLibresXHorario($est, $fechaDesde, $fechaHasta){
        $em = $this->getEntityManager();

        $query =
            'SELECT l FROM ProyectoBundle:Lugar l
              WHERE l.idEstablecimiento = :est';

        $consulta = $em->createQuery($query);
        $consulta->setParameter('est', $est);

        return $lugares = $consulta->getResult();
    }

}