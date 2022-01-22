# Example 1

## code
````
<?php
  
// Store a string into the variable which
// need to be Encrypted
$simple_string = "Welcome to GeeksforGeeks\n";
  
// Display the original string
echo "Original String: " . $simple_string;
  
// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "GeeksforGeeks";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";
  
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "GeeksforGeeks";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
        $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;
  
?>
````

## output

````
Original String: Welcome to GeeksforGeeks
Encrypted String: hwB1K5NkfcIzkLTWQeQfHLNg5FlyX3PNUA==
Decrypted String: Welcome to GeeksforGeeks
````

# Example 2

## code
````
<?php
  
// Store a string into the variable which
// need to be Encrypted
$simple_string = "Welcome to GeeksforGeeks";
  
// Display the original string
echo "Original String: " . $simple_string . "\n";
  
// Store cipher method
$ciphering = "BF-CBC";
  
// Use OpenSSl encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Use random_bytes() function which gives
// randomly 16 digit values
$encryption_iv = random_bytes($iv_length);
  
// Alternatively, we can use any 16 digit
// characters or numeric for iv
$encryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
  
// Encryption of string process starts
$encryption = openssl_encrypt($simple_string, $ciphering,
        $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";
  
// Decryption of string process starts
// Used random_bytes() which gives randomly
// 16 digit values
$decryption_iv = random_bytes($iv_length);
  
// Store the decryption key
$decryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
  
// Descrypt the string
$decryption = openssl_decrypt ($encryption, $ciphering,
            $decryption_key, $options, $encryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;
  
?>
````

## output

````
Original String: Welcome to GeeksforGeeks
Encrypted String: hwB1K5NkfcIzkLTWQeQfHLNg5FlyX3PNUA==
Decrypted String: Welcome to GeeksforGeeks
````
