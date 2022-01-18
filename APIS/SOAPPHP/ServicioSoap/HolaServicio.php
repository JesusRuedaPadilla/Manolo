<?php
class HolaServicio
{
   /**
     * @soap
     *
     * @param string $name
     * @return string
     */
    public function adios(string $name)
        {
                        return 'Adios, '.$name;
        }

/**
     * @soap
     *
     * @param string $name
     * @return string
     */
    public function saludo(string $name)
        {
                        return 'Hola, '.$name;
        }

        /**
     * @soap
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function suma(int $a, int $b)
    {
                    return $a + $b;
    }

}