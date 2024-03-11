<?php

class FirstService
{
    public function execute()
    {
        return 'first service running';
    }
}

class SecondService
{
    public function handle(FirstService $service =  new FirstService())
    {
        return $service->execute();
    }
}

$secondService = new SecondService();

echo $secondService->handle();