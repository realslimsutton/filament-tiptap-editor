<?php

namespace FilamentTiptapEditor;

use Livewire\Livewire;
use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTiptapEditorServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-tiptap-editor-styles' => __DIR__ . '/../resources/dist/filament-tiptap-editor.css',
    ];

    protected array $beforeCoreScripts = [
        'filament-tiptap-editor-scripts' => __DIR__ . '/../resources/dist/filament-tiptap-editor.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-tiptap-editor')
            ->hasConfigFile()
            ->hasAssets()
            ->hasViews();
    }

    public function boot()
    {
        parent::boot();

        Livewire::component('filament-tiptap-editor-media-uploader', Components\MediaUploader::class);
        Livewire::component('filament-tiptap-editor-link-modal', Components\LinkModal::class);
    }
}
