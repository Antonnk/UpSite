<?php

use Domain\Theme\Field;
use Domain\Theme\Section;
use Domain\Theme\Theme;

return [

    Theme::create('food', 'Foody', [
        Section::create('intro', 'Intro', 'Above the fold', [
            Field::create('heading', 'string', 'The Heading', 'The name of your shop or company'),
            Field::create('description', 'string', 'Tells us a bit about yourself', 'To control the font weight of an element on hover, add the hover: prefix to any existing style and decoration utility. For example, use hover:font-bold to apply the font-bold utility on hover.'),
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

