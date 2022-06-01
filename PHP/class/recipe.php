<?php

class Recipe
{
    protected $id;

    protected $title;

    protected $description;

    protected $category;

    public function __construct($title, $description, $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
    }

    static public function GetAllRecipesByCategory($database, $category)
    {
        $recipes = [];

        $result = $database->execute("SELECT * FROM recipes WHERE category='" . $category . "'");

        if ($result->num_rows < 1) {
            return false;
        }

        for ($i = 0; $i < $result->num_rows; $i++) {
            $recipeData = $result->fetch_row();

            $recipe = new Recipe($recipeData[1], $recipeData[2], $recipeData[3]);

            $recipe->id = $recipeData[0];

            $recipes[] = $recipe;
        }

        return $recipes;
    }

    public function getHtml()
    {
        $handle = curl_init("https://helloacm.com/api/markdown/");

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($handle, CURLOPT_HEADER, 1);

        curl_setopt($handle, CURLOPT_POST, true);

        curl_setopt($handle, CURLOPT_POSTFIELDS, [
            "s" => $this->description
        ]);

        $response = curl_exec($handle);

        if (curl_getinfo($handle, CURLINFO_HTTP_CODE) !== 200) {
            return false;
        }

        $header_size = curl_getinfo($handle, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($handle);

        return json_decode($body);
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
