<?php

$EM_CONF[$_EXTKEY] =  [
    'title' => 'Accessible video player based on MediaElement.js',
    'description' => 'Accessible video player based on MediaElement.js and A11y Plugin and Fluid. The new content elements support mp4, webm, subtitles, sign language video, audio description, poster image, text alternative, etc.',
    'category' => 'fe',
    'author' => 'Robert Pudenz',
    'author_email' => 'r.pudenz@dreistrom.land',
    'author_company' => 'dreistrom.land AG',
    'state' => 'stable',
    'version' => '2.0.3',
    'constraints' =>
     [
         'depends' =>
          [
              'typo3' => '12.4.0-13.4.99',
          ],
         'conflicts' =>
          [
          ],
         'suggests' =>
          [
          ],
     ],
];
