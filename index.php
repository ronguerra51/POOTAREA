<?php

class Producto
{
    # DEFINICION DE ATRIBUTOS
    protected string $nombre;
    public int $precio;
    public bool $disponible;


    # método constructor, se ejecuta al ejecutar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        # se les da valores a los atributos con los parametros que recibe el método constructor
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    # definicion de metodos
    public function mostrarProducto()
    {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    # método getter para propiedad protegida de nombre
    public function getNombre(): string
    {
        return $this->nombre;
    }

    # método setter para propiedad protegida de nombre
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();
echo $producto->getNombre(); // OBTIENE EL NOMBRE
$producto->setNombre('Nuevo Nombre'); // SETEA EL NOMBRE
echo $producto->getNombre(); // OBTIENE EL NOMBRE
?>
