<?php

use PHPUnit\Framework\TestCase;
use Cesantos\Cep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);        

        $this->assertEquals($esperado, $resultado);
    }

    /**
     * coleção de testes
     */

    public function dadosTeste()
    {
        return [
            'Endereço Praça da Sé' => [
                '01001000',
                [
                    'cep' => '01001-000',
                    'logradouro' => 'Praça da Sé',
                    'complemento' => 'lado ímpar',
                    'bairro' => 'Sé',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'unidade' => '',
                    'ibge' => 3550308,
                    'gia' => 1004
                ]
            ],
            'Endereço Casa' => [
                '05551250',
                [
                    'cep' => '05551-250',
                    'logradouro' => 'Rua Estreano Augusto Escalera',
                    'complemento' => '',
                    'bairro' => 'Jardim Raposo Tavares',
                    'localidade' => 'São Paulo',
                    'uf' => 'SP',
                    'unidade' => '',
                    'ibge' => 3550308,
                    'gia' => 1004
                ]
            ]
        ];
    }
}
