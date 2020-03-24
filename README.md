 phalconproject
 
### This project was fixed, because phalcon-devtools had created it with some errors. 
### First of all a public/index.pfp was created with the following error:
#
    $application = new \Phalcon\Mvc\Application($di);
    echo $application->handle($_SERVER['REQUEST_URI'])->getContent();

## Have solution to alter echo for following text:

    $application = new \Phalcon\Mvc\Application($di);
    echo $application->handle($_GET['_url'] ?? '/')->getContent();
#
## Second adjust
## app/config/config.php
#
     'application' => [
       'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'baseUri'        => '/',
    ]
 ## Have solution with following adjusts:
 
      'application' => [
       'appDir'         => APP_PATH . '/myprojectname/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
    ]
 
 ## Only after this changes We can see begin page.
 
Congratulations!
You're now flying with Phalcon. Great things are about to happen!

This page is located at views/index/index.phtml

## But I have some errors that I not know exactly where they came.
