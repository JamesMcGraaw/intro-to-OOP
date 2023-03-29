<?php

require_once 'Pig.php';
require_once 'pdo-connection.php';
$db = '';
class Sty
{
    private array $pigs;

    /**
     * @return array
     */
    public function getPigs(): array
    {
        return $this->pigs;
    }
    public function getPig(int $pigIndex): Pig
    {
        return $this->pigs[$pigIndex];
    }

    /**
     * @param Pig $pig
     */
    public function addPig(Pig $pigs): void
    {
        $this->pigs[] = $pigs;
    }

    // void at the end of a function indicates that it is not returning anything
    public function addPigs(array $pigs): void
    {
        $this->pigs = array_merge($this->pigs, $pigs);
    }
}