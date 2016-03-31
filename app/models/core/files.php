<?php

namespace Models\Core;

 
// Define models
class Files {

    public static function file_new() {

        $storage = new \Upload\Storage\FileSystem(ROOT . '/public/images');
        $file = new \Upload\File('name', $storage);
        $new_filename = $file->getName() . '_' . uniqid();
        $file->setName($new_filename);
        $new_filename = $file->getNameWithExtension();
        $file->addValidations(array(
            new \Upload\Validation\Mimetype(array('image/png', 'image/jpeg', 'image/gif')),
            new \Upload\Validation\Size('5M')));
        $data = array(
            'name'       => $file->getNameWithExtension(),
            'extension'  => $file->getExtension(),
            'mime'       => $file->getMimetype(),
            'size'       => $file->getSize(),
            'md5'        => $file->getMd5(),
            'dimensions' => $file->getDimensions());
        try {$file->upload();
            return $file->getNameWithExtension();} 
        catch (\Exception $e) {
            $errors = $file->getErrors();}}

    public static function delete_file($new_filename) {
            $target_path = ROOT.'/public/images/'.$new_filename;
            unlink($target_path);
            $target_path = ROOT.'/public/images/trumb_'.$new_filename;
            unlink($target_path);}



}