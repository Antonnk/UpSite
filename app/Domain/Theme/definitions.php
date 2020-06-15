<?php

use Domain\Theme\Field;
use Domain\Theme\Section;
use Domain\Theme\Theme;

return [

    Theme::create('food', 'Foody', [
        Section::create('intro', 'Intro', 'Above the fold', [
            Field::create('heading', 'string', 'The Heading'),
            Field::create('description', 'string', 'Tells us a bit about yourself'),
        ]),
        Section::create('contact', 'Contact details', 'Where can we catch you?', [
            Field::create('phone', 'string', 'Phone number'),
            Field::create('address', 'object', 'Address'),
        ]),
    ]),

    Theme::create('default', 'Fallback theme', [
        Section::create('main', 'Main section', '', [
            Field::create('heading', 'string', 'The Heading'),
        ]),
    ]),

];

