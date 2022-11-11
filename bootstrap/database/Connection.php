<?php

class Connection
{
    public static function make(array $config)
    {
        try {
            return new PDO(
                $config['dsn'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $error) {
            error_log($error->getMessage());
        }
    }
}
