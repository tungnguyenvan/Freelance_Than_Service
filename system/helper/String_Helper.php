<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

// Chuyển đổi chữ thành số
function string_to_int($str) {
    return sprintf("%u", crc32($str));
}

function csrf_token(){
	return bin2hex(mt_rand(16));
}
