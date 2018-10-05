<?php

namespace FicheBundle\Factory;

use FicheBundle\Entity\Ressource;
use UserBundle\Entity\User;
use FicheBundle\Entity\Fiche;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class EntityFactory
{
    protected $maxFilesize;
    protected $ressourceDir;

    public function __construct(Int $maxFilesize, String $ressourceDir, TokenStorage $tokenStorage) {
        $this->maxFilesize  = $maxFilesize;
        $this->ressourceDir = $ressourceDir;
        $this->tokenStorage = $tokenStorage;
    }

    public function buildRessource($file, String $titre, Fiche $fiche): Ressource
    {
        $extension       = $file->guessExtension();
        $formatRessource = $this->getFormatRessource($extension);
        $fileName        = md5(uniqid()) . "." . $extension;
        $route           = $this->ressourceDir . "groupe" . $fiche->getGroupe()->getId() . "/fiche" . $fiche->getId() . "/";

        if (!is_dir($route)) {
            mkdir($route, 0777, true);
        }

        $filesize = filesize($file);
        
        if ($filesize > $this->maxFilesize)  {
            throw new \Exception('Vous ne pouvez pas poster un fichier de plus de <b>3Go</b>.');
        }
        if ( !($this->tokenStorage->getToken()->getUser()->isPremium()) and ($filesize + $this->tokenStorage->getToken()->getUser()->getFilesize() > $this->maxFilesize) ) {
            throw new \Exception('Vous avez atteint votre <b>limite de 3Go</b> de données postées.<br><b>Passez Premium pour bénéficier du mode illimité !</b><br>Vous pouvez également supprimer des anciennes ressources afin d\'en poster de nouvelles.');  
        }

        $file->move($route, $fileName);

        $ressource = new Ressource();
        $ressource->setTitre($titre);
        $ressource->setRouteDoc($fileName);
        $ressource->setFiche($fiche);
        $ressource->setFilesize($filesize);
        $ressource->setImage($formatRessource);

        return $ressource;
    }

    private function getFormatRessource($extension)
    {
        switch ($extension) {
            case "pdf":
              $formatRessource = "pdf.png";
            break;

            case "doc":
            case "docx":
            case "odt":
                $formatRessource = "word.png";
            break;

            case "xls":
            case "xlsx":
              $formatRessource = "excel.png";
            break;

            case "ppt":
            case "pptx":
            case "odp":
              $formatRessource = "powerpoint.png";
            break;

            case "mp4":
            case "avi":
            case "mov":
            case "wmv":
            case "mpeg":
            case "mpg":
            case "wma":
            case "wmv":
            case "flv":
            case "xvid":
                $formatRessource = "video.png";
            break;

            case "jpg":
            case "jpeg":
            case "png":
            case "bmp":
                $formatRessource = "image.jpg";
            break;
            default:
              throw new \Exception('Le format de l\'image n\'est pas supporté. ');
        }

        return $formatRessource;
    }
}