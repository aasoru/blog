<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://tinymce-editor/tinymce-editor.yaml',
    'modified' => 1658418588,
    'size' => 1928,
    'data' => [
        'enabled' => true,
        'restrictions' => [
            'whitelist' => false,
            'blacklist' => false
        ],
        'whitelist' => [
            'items' => [
                0 => '@root.descendants'
            ],
            'filter' => [
                'published' => true,
                'non-published' => true
            ]
        ],
        'blacklist' => [
            'items' => [
                0 => '@none'
            ],
            'filter' => [
                'published' => true,
                'non-published' => true
            ]
        ],
        'apikey' => NULL,
        'plugins' => [
            0 => 'advlist',
            1 => 'anchor',
            2 => 'autoresize',
            3 => 'charmap',
            4 => 'code',
            5 => 'colorpicker',
            6 => 'emoticons',
            7 => 'fullscreen',
            8 => 'hr',
            9 => 'image',
            10 => 'insertdatetime',
            11 => 'link',
            12 => 'lists',
            13 => 'media',
            14 => 'nonbreaking',
            15 => 'pagebreak',
            16 => 'paste',
            17 => 'print',
            18 => 'searchreplace',
            19 => 'table',
            20 => 'textcolor',
            21 => 'toc',
            22 => 'visualchars',
            23 => 'wordcount'
        ],
        'parameters' => [
            0 => [
                'name' => 'fontsize_formats',
                'value' => '6pt 7pt 8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 32pt 36pt 40pt 44pt 48pt 54pt 60pt 66pt 72pt 80pt 88pt 96pt'
            ],
            1 => [
                'name' => 'paste_data_images',
                'value' => '1'
            ]
        ],
        'evals' => '',
        'menubar' => true,
        'menu' => [
            0 => [
                'title' => 'File',
                'items' => 'newdocument print'
            ],
            1 => [
                'title' => 'Edit',
                'items' => 'undo redo | cut copy paste pastetext | selectall | searchreplace'
            ],
            2 => [
                'title' => 'Insert',
                'items' => 'media link image | pagebreak charmap anchor hr insertdatetime nonbreaking toc'
            ],
            3 => [
                'title' => 'View',
                'items' => 'visualchars visualaid | fullscreen'
            ],
            4 => [
                'title' => 'Format',
                'items' => 'bold italic underline strikethrough superscript subscript | formats | removeformat'
            ],
            5 => [
                'title' => 'Table',
                'items' => 'inserttable tableprops deletetable | cell row column'
            ],
            6 => [
                'title' => 'Tools',
                'items' => 'code'
            ]
        ],
        'toolbar' => [
            0 => [
                'row' => 'newdocument print | cut copy paste | undo redo | searchreplace visualchars | table image media emoticons toc | insertdatetime pagebreak charmap | link unlink anchor | blockquote nonbreaking hr | code'
            ],
            1 => [
                'row' => 'formatselect | fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | indent outdent | forecolor backcolor | bullist numlist | superscript subscript | removeformat | fullscreen'
            ]
        ],
        'branding' => false,
        'statusbar' => true
    ]
];
