<?php

class Writer
{
    public function write($text)
    {
        $text = '<p>Date : ' . date('d/m/Y') . '</p>' . "\n" .
            '<p>' . nl2br($text) . '</p>';
        file_put_contents('fichier.txt', $text);
    }
}