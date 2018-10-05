<?php

namespace AppBundle\Uploader;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Uploader
{
	public function upload($route, UploadedFile $file)
	{
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($route, $fileName);

        return $fileName;
	}
}