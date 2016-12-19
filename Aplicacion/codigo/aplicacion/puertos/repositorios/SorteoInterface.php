<?php

namespace aplicacion\puertos\repositorios;

use core\dominio\SorteoInterface;

use core\dominio\SorteoInterface;

interface SorteoRepositorioInterfaz
{
    /**
     *
     * @param int $idSorteo
     * @return SorteoInterface
     */
    public function getSorteo(int $idSorteo);

    /**
     *
     * @param SorteoInterface $sorto
     * @return SorteoInterface
     */
    public function save(SorteoInterface $sorto);
}