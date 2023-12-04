<?php

namespace App\Service;

use Symfony\Component\Security\Core\Exception\RuntimeException;
class EncryptionService
{
    private string $encryptionKey = "a0d1f2b3c4e5g6i7k8m9o0q1s2u3w4y5";
    private string $fixedIv = "1234567890123456";

    function encrypt($plaintext, $shift) {
        $encryptedText = "";
    
        for ($i = 0; $i < strlen($plaintext); $i++) {
            $character = $plaintext[$i];
    
            if (ctype_alpha($character)) {
                $base = ctype_upper($character) ? ord('A') : ord('a');
                $encryptedText .= chr((ord($character) - $base + $shift) % 26 + $base);
            } else {
                $encryptedText .= $character;
            }
        }
    
        return $encryptedText;
    }

    function decrypt($ciphertext, $shift) {
        return $this->encrypt($ciphertext, 26 - $shift); 
    }
}
