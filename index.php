<?php
/**
 * Key Generator Script
 * --------------------
 * Generates secure random keys for API tokens, license codes, etc.
 * 
 * Usage:
 *   php key_generator.php
 * 
 * Optional:
 *   php key_generator.php 32     # generate 32-character key
 *   php key_generator.php 64 all # generate 64-character key with all chars
 */

class KeyGenerator
{
    /**
     * Generate a secure random key.
     *
     * @param int $length Key length
     * @param string $type Character type: 'alnum', 'alpha', 'numeric', 'all'
     * @return string
     */
    public function generate($length = 32, $type = 'alnum')
    {
        switch ($type) {
            case 'alpha':
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'numeric':
                $chars = '0123456789';
                break;
            case 'all':
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}<>?';
                break;
            default:
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        }

        $max = strlen($chars) - 1;
        $key = '';
        for ($i = 0; $i < $length; $i++) {
            $key .= $chars[random_int(0, $max)];
        }

        return $key;
    }
}

// ---- CLI usage ----
$length = $argv[1] ?? 32;
$type = $argv[2] ?? 'alnum';

$generator = new KeyGenerator();
$key = $generator->generate((int)$length, $type);

echo "Generated Key: " . $key . PHP_EOL;
