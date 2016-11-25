<?php
return [
        'title' => 'Food For Fun',
        'posts_per_page' => 5,
        'page_image' => '/uploads/post_pic_default',
        'uploads' => [
            'storage' => 'local',   //定义使用的文件系统
            'webpath' => '/uploads' //定义web访问根目录
        ]
];