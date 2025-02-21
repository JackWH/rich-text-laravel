<?php

namespace Tonysm\RichTextLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tonysm\RichTextLaravel\Commands\RichTextLaravelInstallCommand;

class RichTextLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('rich-text-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_rich_texts_table')
            ->hasCommand(RichTextLaravelInstallCommand::class);
    }

    public function packageBooted()
    {
        LivewireSupportsRichText::init();
    }
}
