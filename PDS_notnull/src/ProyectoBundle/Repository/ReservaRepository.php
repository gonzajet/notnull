<?php
/**
 * Created by PhpStorm.
 * User: fede
 * Date: 25/11/17
 * Time: 18:31
 */

namespace ProyectoBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ReservaRepository extends EntityRepository{
    public function findPorHorario($desde, $hasta, $lugares){
        $em = $this->getEntityManager();

        $query = 'SELECT r FROM ProyectoBundle:Reserva r 
               WHERE (r.fechaDesde > :param1 AND r.fechaDesde < :param2) 
                  OR (r.fechaDesde > :param1 AND r.fechaHasta < :param2)
                  OR (r.fechaHasta > :param1 AND r.fechaHasta < :param2)
                  OR (r.fechaDesde < :param1 AND r.fechaHasta > :param2) 
               AND r.idLugar IN (:param3)';

        $consulta = $em->createQuery($query);
        $consulta->setParameters(array(
            'param1' => $desde,
            'param2' => $hasta,
            'param3' => $lugares
        ));

        return $establecimientos = $consulta->getResult();
    }
}

/* */