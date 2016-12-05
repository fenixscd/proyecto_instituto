<?php

namespace aplicacion\puertos\repositorios;

use core\dominio\SorteoInterface;

use core\dominio\SorteoInterface;

interface SorteoRepositorioInterfaz
{
    public function getSorteo(int $idSorteo);
    public function save(SorteoInterface $sorto);
}