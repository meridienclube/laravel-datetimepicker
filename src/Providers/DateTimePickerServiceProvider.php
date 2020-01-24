<?php

namespace ConfrariaWeb\DateTimePicker\Providers;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;

class DateTimePickerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'datetimepicker');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor'),
        ], 'cw_datetimepicker');

        Form::component('bsText', 'vendor::components.form.datetimepicker', ['name', 'value' => null, 'attributes' => []]);
    }

    public function register()
    {

    }

}
