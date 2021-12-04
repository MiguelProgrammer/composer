<?php

/**
 * Estudante: Miguel Pereira da Silva
 */
Class OlaMundo
{
    /*
     * Subrotina
     */
    public static function apresentacao(): void
    {
        echo PHP_EOL."# Projeto - PHP Composer: Dependências, Autoload e Publicação #".PHP_EOL.PHP_EOL;
    }

    /*
     * Subrotina
     */
    public static function toString(string $menssagem): void
    {
        echo $menssagem.PHP_EOL;
    }

}