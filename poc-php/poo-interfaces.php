<?php

interface Money
{
    public function getMoney();
}

class Bank implements Money
{
    public function getMoney()
    {
        return '10' . PHP_EOL;
    }
}

class Broker implements Money
{
    public function getMoney()
    {
        return '15';
    }
}

class OperationService
{
    public function retrieveInvestments(Money $institution)
    {

        return $institution->getMoney();
    }
}

$service = new OperationService();

echo $service->retrieveInvestments(new Bank);