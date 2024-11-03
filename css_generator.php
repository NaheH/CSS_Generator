#!/usr/bin/php
<?php
// Récupération du chemin du fichier //

function getImage($filePath)
{
    chdir($filePath);
    return glob("*.png");
}
$image = getImage("/home/nahe/generator");

// Calcul de la taille de l'image //

function getSize($image)
{
    $size = getimagesize($image);
    $resize = $size[3];
}

foreach ($image as $key => $value) {
    getSize($value);
}

// Création d'une image vide //

function createImage()
{
    $background = imagecreatetruecolor(1800, 1800);
}

// Fusion des images, création du sprite //

function addImage($image)
{
    $file = getImage($image);

    $var = 0;
    $hauteur = 0;
    foreach ($file as $pic) {
        $img = imagecreatefrompng($pic);
        $var = $var + imagesx($img);
        if (imagesy($img) > $hauteur) {
            $hauteur = imagesy($img);
        } else {
            $hauteur = $hauteur;
        }
    }

    $dest = imagecreatetruecolor($var, $hauteur);
    $start = 0;

    foreach ($file as $pic) {
        $img = imagecreatefrompng($pic);
        imagecopymerge(
            $dest,
            $img,
            $start,
            0,
            0,
            0,
            imagesx($img),
            imagesy($img),
            75
        );
        $start = $start + imagesx($img);
    }
    imagepng($dest, "sprite.png");

    // creation fichier css //

    $image = getImage("../generator");

    $starter = 0;
    $css = "";

    foreach ($image as $key => $value) {
        $tab = getimagesize($value);
        $largeur = $tab[0];
        $hauteur = $tab[1];
        $starter = $starter + imagesx($img);

        $css .=
            "." . 
            $value .
            " { " .
            "\n" .
            "   width: " .
            $hauteur .
            "px;" .
            " " .
            "height:" .
            $largeur .
            "px" .
            ";" .
            "\n" .
            "   background: " .
            "url('sprite.css')" .
            " " .
            "- 0" .
            "px " .
            "-" .
            $starter .
            "px " .
            ";" .
            "\n" .
            "}" .
            "\n". 
            "\n";
    }

    file_put_contents("sprite.css", $css);
}

addImage("../generator");

