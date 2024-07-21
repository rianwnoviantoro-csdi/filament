<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ServiceSettings extends Settings
{

    public ?string $payment_description;
    public ?string $payment_banner;

    public ?string $supply_chain_description;
    public ?string $supply_chain_banner;

    public ?string $pricing_description;
    public ?string $pricing_banner;

    public static function group(): string
    {
        return 'services';
    }
}
