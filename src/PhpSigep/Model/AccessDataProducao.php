<?php
namespace PhpSigep\Model;

class AccessDataProducao extends AccessData
{
    /**
     * Atalho para criar uma {@link AccessData} com os dados do ambiente de homologação.
     */
    public function __construct()
    {
        parent::__construct(
            array(
                'usuario' => '?',
                'senha' => '?',
                'codAdministrativo' => '?',
                'numeroContrato' => '?',
                'cartaoPostagem' => '?',
                'cnpjEmpresa' => '?', // Obtido no método 'buscaCliente'.
                'anoContrato' => null, // Não consta no manual.
                'diretoria' => new Diretoria(Diretoria::DIRETORIA_DR_RIO_GRANDE_DO_SUL), // Obtido no método 'buscaCliente'.
            )
        );
        try {
            \PhpSigep\Bootstrap::getConfig()->setEnv(\PhpSigep\Config::ENV_PRODUCTION);
        } catch (\Exception $e) {
            // Continua mesmo com erro
        }
    }
}
