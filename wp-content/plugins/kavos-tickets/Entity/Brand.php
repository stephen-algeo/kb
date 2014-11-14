<?php

class Brand {

    private $id;
    private $name;
    private $slug;
    private $image;
    private $description;

    public function __construct($id)
    {
        global $wpdb;
        $rs = $wpdb->get_results( 'SELECT * FROM brands WHERE id = '.$id );

        if (sizeof($rs) ==1)
        {
            $brand = $rs[0];

            $this->id = $brand->id;
            $this->name = $brand->name;
            $this->slug = $brand->slug;
            $this->image = $brand->image;
            $this->description = $brand->description;
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}