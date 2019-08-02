<?php


class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        $this->array[0] = $x;
        $this->array[1] = $y;
        $this->array[2] = $z;
    }

    public function getXYZ()
    {
        return $this->array;
    }

    public function toString()
    {
        return 'Position X: '.$this->x .'<br>'.'Position Y:'.$this->y.'<br>'.'Position Z: '.$this->z;
    }
}