<?php

class Mailer
{
    public function send($text)
    {
        $text = '<p>Date : ' . date('d/m/Y') . '</p>' . "\n" .
            '<p>' . nl2br($text) . '</p>';
        mail('login@fai.tld', 'Test avec les traits', $text);
    }
}