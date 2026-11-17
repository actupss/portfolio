<?php
   use Carbon_Fields\Container;
   use Carbon_Fields\Field;
   Container::make('post_meta', 'Projekt')
       ->where('post_type', '=', 'project')
       ->add_fields([
        field::make('image', 'image', 'Bild') ->set_required(),
        field::make('textarea', 'description', 'Beschreibung') ->set_required() ->set_help_text('Wird für den Teaser benötigt'),
        field::make('textarea', 'lead', 'Lead') ->set_required(),
        field::make('rich_text', 'text', 'Text') ->set_required(),
           // Felder hier einfügen
       ]);