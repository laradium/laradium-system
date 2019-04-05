# System module for Laradium CMS
This module adds System section to the administration panel which contains useful system information and log viewing/downloading
# Installation

## For local use

1. Add this to your project repositories list in `composer.json` file

```
"repositories": [
    {
      "type": "path",
      "url": "../packages/laradium"
    },
    {
      "type": "path",
      "url": "../packages/laradium-system"
    }
  ]
```

Directory structure should look like this

```
-Project
-packages
--laradium
--laradium-system
```

## For global use

```
"repositories": [
        {
            "type": "git",
            "url": "https://github.com/laradium/laradium.git"
        },
        {
            "type": "git",
            "url": "https://github.com/laradium/laradium-system.git"
        }
    ]
```

2. ```composer require laradium/laradium-system dev-master```
3. ```php artisan vendor:publish --tag=laradium-system```
4. Configure `config/laradium-system.php` file with your preferences

## Usage

System section:
![System](https://www.dropbox.com/s/egjhua1sukxor8h/Screenshot%202019-04-05%2011.56.28.png?raw=1)

You can access the system functionality with `laradium()->system()`

Get current server information
```PHP
laradium()->system()->info();
```

Get the browser of the current user
```PHP
laradium()->system()->browser();
```

Get the operating system of the current user
```PHP
laradium()->system()->os();
```

Get the IP address of the current user
```PHP
laradium()->system()->userIp();
```

Useful log functions
```PHP
laradium()->system()->error();
```
```PHP
laradium()->system()->warning();
```
```PHP
laradium()->system()->debug();
```
