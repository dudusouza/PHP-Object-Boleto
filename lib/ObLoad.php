<?php

/**
 * Description of ObLoad
 *
 * @author eduardo
 */
class ObLoad {

    /**
     * Registra o autoad da lib
     */
    public static function registerAutoload() {
        spl_autoload_register(array('ObLoad', 'load'));
    }

    /**
     * Auto load da classe
     * @param string $class
     */
    public static function load($class) {
        $basedir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $class = str_replace('ob\\', '', $class);
        $file = $basedir . $class . '.php';
        if (file_exists($file)) {
            include_once $file;
        }
    }

}
