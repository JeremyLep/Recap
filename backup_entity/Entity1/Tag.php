<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="label", type="string", length=255)
   */
  private $label;

  public function getId()
  {
    return $this->id;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }
}