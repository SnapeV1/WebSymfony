<?php

namespace App\Service;

use Symfony\Component\Security\Core\Exception\RuntimeException;

class EncryptionService
{
    private string $encryptionKey="a0d1f2b3c4e5g6i7k8m9o0q1s2u3w4y5";

    

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
