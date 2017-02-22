<?php

/*
 * This file is part of Laravel Reviewable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Reviewable;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class ReviewableServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishMigrations();

        $this->publishConfig();
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        parent::register();

        $this->mergeConfig();
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'reviewable';
    }
}
