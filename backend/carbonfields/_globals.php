<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Inhaltsfeld-Konfiguration der globalen Einstellungen des Themes
Container::make('theme_options', 'Globales')
    ->add_fields([
        Field::make('image', 'logo', 'Logo')
            ->set_help_text('Copyright-Text, der im Footer angezeigt wird.'),
        // todo: Globale Inhaltsfelder hier ergänzen
    ]);
