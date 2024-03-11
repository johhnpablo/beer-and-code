<?php

enum Status: string
{
    case PAID = 'Pago';
    case PENDING = 'Pendente';
    case CANCELED = 'Cancelado';

    public function color()
    {
        return match ($this) {
            self::PAID => 'green',
            self::PENDING => 'yeloow',
            self::CANCELED => 'red',
        };
    }
}

class CheckoutService
{
    public function handle(Status $gatewayStatus)
    {
        return $gatewayStatus->color();
    }
}

$service = new CheckoutService();

echo $service->handle(Status::PAID);
