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
    public function registerAutoload(){
        spl_autoload_register(array('ObLoad','load'));
    }
    
    /**
     * Auto load da classe
     * @param string $class
     */
    public function load($class){
        $dirs = array('utils','core');
        $basedir = dirname(__FILE__).DIRECTORY_SEPARATOR;
        foreach($dirs as $dir){
            $dir = $basedir.$dir.DIRECTORY_SEPARATOR;
            $file = $dir.$class.'.php';
            if(file_exists($file)){
                include_once $file;
            }
        }
    }
    
}
