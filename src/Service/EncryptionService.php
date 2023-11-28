<?php

namespace App\Service;

use Symfony\Component\Security\Core\Exception\RuntimeException;

class EncryptionService
{
    private string $encryptionKey="a0d1f2b3c4e5g6i7k8m9o0q1s2u3w4y5";

    



private string $key="Ty2HouiK748MRt9ju3hf7VV1nOJsMQzq";
    function encryptAES($text, $key) {
        if (!in_array(strlen($key), [16, 24, 32], true)) {
            return false;
        }
    
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    
        $encryptedText = openssl_encrypt($text, 'aes-256-cbc', $key, 0, $iv);
    
        // Concatenate the IV and the encrypted text for later decryption.
        $result = base64_encode($iv . $encryptedText);
    
        return $result;
    }








    



    public function encrypt(string $message): string
    {
        $iv= openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

        $encrypted = openssl_encrypt($message, 'aes-256-cbc', $this->encryptionKey, 0, $iv);

        if ($encrypted === false) {
            throw new RuntimeException('Encryption failed.');
        }

        return base64_encode($iv . $encrypted);
    }

    public function decrypt(string $encryptedMessage): string
    {
        $data = base64_decode($encryptedMessage);
        $iv = substr($data, 0, openssl_cipher_iv_length('aes-256-cbc'));
        $message = substr($data, openssl_cipher_iv_length('aes-256-cbc'));

        $decrypted = openssl_decrypt($message, 'aes-256-cbc', $this->encryptionKey, 0, $iv);

        if ($decrypted === false) {
            throw new RuntimeException('Decryption failed.');
        }

        return $decrypted;
    }
}
