# grumphp-php-check-syntax

Run `php -l` on the code.

### grumphp.yml:
````yml
parameters:
    tasks:
        php_check_syntax:
            exclude: []
            triggered_by: [php, inc, module, phtml, php3, php4, php5]
    extensions:
        - hkirsman\PhpCheckSyntaxTask\ExtensionLoader
````

### Composer

``composer require --dev hkirsman/grumphp-php-check-syntax``
