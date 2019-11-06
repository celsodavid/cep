<?php

namespace Cesantos\Cep;

use Cesantos\Cep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        return (new ViaCep())->get($zipCode);
    }
}
