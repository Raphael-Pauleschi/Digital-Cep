<?php
use PHPUnit\Framework\TestCase;
use Pauleschi\DigitalCep\Search;

class SearchTest extends testCase
{
    public function testGetAdressFromZipcodeDefault()
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode('01001000');

        $esperado = [
            "cep" => "01001-000",
            "logradouro" => "Praça da Sé",
            "complemento" => "lado ímpar",
            "bairro" => "Sé",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "ibge" => "3550308",
            "gia" => "1004",
            "ddd" => "11",
            "siafi" => "7107"
        ];

        $this->assertEquals($esperado, $resultado);

    }
}

?>