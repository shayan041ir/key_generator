# PHP Key Generator

A simple PHP script to generate unique and secure keys. Ideal for API tokens, license keys, or passwords.

---

## Features

- Generates keys of any desired length  
- Selectable character types:
  - `alnum` : letters and numbers (default)  
  - `alpha` : letters only  
  - `numeric` : numbers only  
  - `all` : letters, numbers, and special characters  
- Secure and random using PHP's `random_int`

---

## Installation & Usage

1. Download the `key_generator.php` file or clone the repository:

```bash
git clone https://github.com/username/key-generator-php.git
cd key-generator-php

Run the script via the command line:
php key_generator.php


Customize key length and character type:
php key_generator.php 64 all

Example Output :
$ php key_generator.php 40
Generated Key: sH29kF3rMnWf9tq7dPJZqYfTRvh1sEXbqz3yGnB2

License

MIT License © shayan rezayi
I can also prepare a **ready-to-run script with CLI arguments** that matches this README perfectly so anyone can just download and run it. Do you want me to do that?
