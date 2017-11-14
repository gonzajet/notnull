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
    public function findLibresXHorario($idEst, $fechaDesde, $fechaHasta){
        $em = $this->getEntityManager();

        $query =
            'SELECT l FROM ProyectoBundle:Lugar l JOIN ProyectoBundle:Reserva r
              WHERE l.idEstablecimiento = :est
                AND r.fechaDesde < :fHasta
                AND r.fechaHasta > :fDesde';

        $consulta = $em->createQuery($query);
        $consulta->setParameters(array(
            'est' => $idEst,
            'fHasta' => $fechaHasta,
            'fDesde' => $fechaDesde,
        ));

        return $lugares = $consulta->getResult();
    }

}