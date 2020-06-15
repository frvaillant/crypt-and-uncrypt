#Simple crypt and uncrypt class

Based on UnsafeCrypto made by Sjon Hortensius

see more on stack overflow [this link](https://stackoverflow.com/questions/9262109/simplest-two-way-encryption-using-php)

To use, first change the PRIVATE_KEY in Crypto.php

Example of use
```PHP
use App\Crypto;

$input = 'la chaine que vous souhaitez crypter';
$encrypter = new Crypto();

//Crypt string / Chiffrage de la chaine
$mailCrypted = $encrypter->hide($input)->getResult();
//Uncrypt string /  Dechiffrage de la chaine
$mail = $encrypter->show($mailCrypted)->getResult();

```
