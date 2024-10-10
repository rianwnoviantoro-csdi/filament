<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.brand_name', 'Filament');
        $this->migrator->add('general.brand_logo', 'sites/logo.png');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.vision_and_mission_banner', null);
        $this->migrator->add('general.vision_and_mission_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('general.history_banner', null);
        $this->migrator->add('general.history_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('general.introduction_banner', null);
        $this->migrator->add('general.introduction_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('general.organizational_structure_banner', null);
        $this->migrator->add('general.organizational_structure_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('general.banner', null);
        $this->migrator->add('general.site_favicon', 'sites/logo.ico');
        $this->migrator->add('customers.new_installation_banner', null);
        $this->migrator->add('customers.new_installation_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('customers.water_tank_banner', null);
        $this->migrator->add('customers.water_tank_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('customers.change_name_banner', null);
        $this->migrator->add('customers.change_name_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('customers.stop_the_tap_banner', null);
        $this->migrator->add('customers.stop_the_tap_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('customers.move_customer_meters_banner', null);
        $this->migrator->add('customers.move_customer_meters_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('services.pricing_banner', null);
        $this->migrator->add('services.pricing_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('services.supply_chain_banner', null);
        $this->migrator->add('services.supply_chain_description', 'lorem ipsum dolor sit amet');
        $this->migrator->add('services.payment_banner', null);
        $this->migrator->add('services.payment_description', 'lorem ipsum dolor sit amet');
    }
};
