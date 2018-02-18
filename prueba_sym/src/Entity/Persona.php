<?php
//cuando quiero cambiar la base correr el comando php bin/console doctrine:migrations:diff y php bin/console doctrine:migrations:migrate
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=true)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="dni", type="integer", nullable=true)
     */
    private $dni;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     *
     * @return  string
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @param  string  $apellido
     *
     * @return  self
     */ 
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of dni
     *
     * @return  int
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @param  int  $dni
     *
     * @return  self
     */ 
    public function setDni(int $dni)
    {
        $this->dni = $dni;

        return $this;
    }
}
