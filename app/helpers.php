<?php
//记得composer添加加载路径，修改完成后运行 composer dumpauto 确保修改生效
/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2){

    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .@$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片,在文件类型为图片的时候返回 true
 */
function is_image($mimeType){

    return starts_with($mimeType, 'image/');
}