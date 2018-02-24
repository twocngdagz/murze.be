<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy as BasePolicy;

class Policy extends BasePolicy
{
    public function configure()
    {
        return $this
            ->addDirective(Directive::BASE, 'self')
            ->addDirective(Directive::CONNECT, 'self')
            ->addDirective(Directive::DEFAULT, 'self')
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::IMG, 'self')
            ->addDirective(Directive::MEDIA, 'self')
            ->addDirective(Directive::SCRIPT, 'self')
            ->addDirective(Directive::STYLE, 'self')
            ->addDirective(Directive::FONT, 'self')
            ->addDirective(Directive::OBJECT, 'none')
            ->addDirective(Directive::SCRIPT, '*.google-analytics.com')
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com')
            ->addDirective(Directive::SCRIPT, '*.googletagmanager.com')
            ->addDirective(Directive::FONT, 'fonts.gstatic.com')
            ->addDirective(Directive::FONT, 'data:')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
    }
}
