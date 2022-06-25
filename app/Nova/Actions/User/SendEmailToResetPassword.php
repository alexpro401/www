<?php

namespace App\Nova\Actions\User;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Password;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class SendEmailToResetPassword extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Send reset password email';

    /**
     * Indicates if this action is only available on the resource index view.
     *
     * @var bool
     */
    public $onlyOnIndex = true;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            Password::sendResetLink(
                ['email' => $model->email]
            );
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
