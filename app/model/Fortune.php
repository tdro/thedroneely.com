<?php

class Fortune
{
    public function random(): string
    {
        return $this->quotes()[array_rand($this->quotes())];
    }

    public function quotes(): array
    {
        return include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/generators/fortune/fortune.quotes';
    }
}
