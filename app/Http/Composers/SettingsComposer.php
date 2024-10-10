<?php

namespace App\Http\Composers;

use App\Settings\CustomerSettings;
use App\Settings\GeneralSettings;
use App\Settings\ServiceSettings;
use Illuminate\View\View;

class SettingsComposer
{
    protected $generalSettings;
    protected $ServiceSettings;
    protected $CustomerSettings;

    public function __construct(GeneralSettings $generalSettings, CustomerSettings $CustomerSettings, ServiceSettings $ServiceSettings)
    {
        $this->generalSettings = $generalSettings;
        $this->CustomerSettings = $CustomerSettings;
        $this->ServiceSettings = $ServiceSettings;
    }

    public function compose(View $view)
    {
        $view->with([
            'generalSettings' => $this->generalSettings,
            'ServiceSettings' => $this->ServiceSettings,
            'CustomerSettings' => $this->CustomerSettings,
        ]);
    }
}
