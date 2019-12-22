<?php
// if (!function_exists('human_file_size')) {
//     function human_file_size($bytes, $decimals = 2)
//     {
//         $sz = 'BKMGTPE';
//         $factor = (int)floor((strlen($bytes) - 1) / 3);
//         return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sz[$factor];
 
//     }
// }

if(!function_exists('toastr')){
    function toastr($message, $type = 'info'){
        switch ($type) {
            case 'success':
                return 'toastr.success("'.$message.'")';
                break;

            case 'warning':
                return 'toastr.warning("' . $message . '")';
                break;

            case 'error':
                return 'toastr.error("' . $message . '")';
                break;

            case 'info':
                return 'toastr.info("' . $message . '")';
                break;
        }
    }
}

if(!function_exists('numberFormat')){
    function numberFormat($number){
        return number_format($number, 0, ',', '.');
    }
}
if(!function_exists('KondisiProduk')){
    function KondisiProduk($str = ''){
        $arr = [
            1 => 'Baru',
            2 => 'Bekas',
            3 => 'Tidak Layak'
        ];

        if(empty($str))
            return $arr;
        else return $arr[$str];
    }
}