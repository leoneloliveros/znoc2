<?php

/*
 * @author = Starlly Software - https://starlly.com.
 * @licence = GNU
 * @description = Este archivo es propiedad de Deplyn Framework (https://deplyn.com)
 * recuerda que para usarlo debes incluir en tu proyecto la licencia del framework.
 */

class SaveEvidences {

    private $directory;
    private $estacion;
    private $secondLevelDir;
    private $prefix;
    private $validExtensions;
    private $files;
    private $loadName;
    private $dirCreationName;

    function __construct($request = null, $prefix = false, $validExtensions = null) {
        if ($request) {
            $this->prefix = $prefix;
            $this->validExtensions = $validExtensions;
            if ($this->validExtensions) {
                for ($i = 0; $i < count($this->validExtensions); $i++) {
                    $this->validExtensions[$i] = strtolower($this->validExtensions[$i]);
                }
            }
            $this->process($request);
            return $this;
        }
    }

    public function getFiles() {
        return $this->files;
    }

    public static function upload($request = null, $prefix = false, $validExtensions = null) {
        return (new Storage($request, $prefix, $validExtensions))->getFiles();
    }

    public function process($request, $bool = false, $loadName = '') {
        $this->estacion =  $request->estacion;
        $this->secondLevelDir = str_replace("/", "", $request->tipo_trabajo . $request->tecnologia . $request->banda);
        $app = require APPPATH . 'config/app.php';
        $this->files = [];
        if ($bool) {
            $this->directory = 'uploadEvidences';
        }else {
            $this->directory = $app["storage"]["upload_folder"];
        }
        $this->loadName = $loadName;
        if (isset($_FILES[$request->filename])) {
            $files = $this->processFiles($_FILES[$request->filename], $request);
        }
    }

    private function validateExtension($file) {
        if (is_array($this->validExtensions)) {
            return in_array(strtolower($file->ext), $this->validExtensions);
        } else {
            return true;
        }
    }

    private function getFile($file) {
        $file = new ObjUtil($file);
        $parts = explode(".", $file->name);

        //Obtenemos la extención..
        $ext = end($parts);
        $file->name = utf8_decode($file->name);
        if ($this->prefix) {
            $prefix = uniqid(rand());
            // $file->name = $this->loadName . 'test.' . $parts[1]; Aqui se pone el formato del nombre del archivo que quieren que tenga
        }
        $file->ext = $ext;
        $file->path = trim($this->directory, "/") . "/" . $this->estacion . "/" . $this->secondLevelDir . "/" . str_replace("?", "", $file->name);
        return $file;
    }

    private function processFiles($file_post, $request) {
        $files = array();
//        print_r(count($file_post['name']));
//        $file_count = count($file_post['name']);
        $file_count = 1;
        $file_keys = array_keys($file_post);
        for ($i = 0; $i < $file_count; $i++) {
            $file = [];
            foreach ($file_keys as $key) {
//                $file[$key] = $file_post[$key][$i];
                $file[$key] = $file_post[$key];
            }
            $file = $this->getFile($file);
            $input = $file->tmp_name;
            $output = $file->path;
            if ($this->validateExtension($file)) {
                if (!file_exists($this->directory)) {
                    if (!is_dir($this->directory)) {
                        mkdir($this->directory, 0777);
                        chmod($this->directory, 0777);
                    }
                }
                if (!file_exists($this->directory . '/' . $this->estacion)) {
                    if (!is_dir($this->directory . '/' . $this->estacion)) {
                        mkdir($this->directory . '/' . $this->estacion, 0777);
                        chmod($this->directory . '/' . $this->estacion, 0777);
                    }
                }
                if (!file_exists($this->directory . '/' . $this->estacion . '/' . $this->secondLevelDir)) {
                    if (!is_dir($this->directory . '/' . $this->estacion . '/' . $this->secondLevelDir)) {
                        mkdir($this->directory . '/' . $this->estacion . '/' . $this->secondLevelDir, 0777);
                        chmod($this->directory . '/' . $this->estacion . '/' . $this->secondLevelDir, 0777);
                    }
                }
                if (move_uploaded_file($input, $output)) {
                    $file->uploaded = true;
                    chmod($output, 0777);
                } else {
                    $file->uploaded = false;
                }
            } else {
                $file->uploaded = false;
            }
            $this->files[] = $file->all();
        }
    }

    function getDirectory() {
        return $this->directory;
    }

    function setDirectory($directory) {
        $this->directory = $directory;
    }

    function getPrefix() {
        return $this->prefix;
    }

    function getValidExtensions() {
        return $this->validExtensions;
    }

    function setPrefix($prefix) {
        $this->prefix = $prefix;
    }

    function setValidExtensions(...$validExtensions) {
        $this->validExtensions = $validExtensions;
    }

}
