<?php

$connexion = new Connexion('localhost', 'root', 'root', 'tests');

$_SESSION['connexion'] = serialize($connexion);