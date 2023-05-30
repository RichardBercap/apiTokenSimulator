<?php 
namespace App\Services;

trait Token{
    public function generateNewcode(int $length):string{
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $code = '';

        $max = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[mt_rand(0, $max)];
        }

        return $code;
    }
}