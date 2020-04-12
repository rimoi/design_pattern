<?php

namespace App;

use App\Cache\DoctrineAdapter;

class Hello {
    public function sayHello(DoctrineAdapter $doctrineAdaptater)
    {
        if($doctrineAdaptater->has('hello')) {
            return $doctrineAdaptater->get('hello');
        } else {
            sleep(4);
            $content = "Bonjour";

            $doctrineAdaptater->set('hello', $content);

            return $doctrineAdaptater->get('hello');
        }
    }
}