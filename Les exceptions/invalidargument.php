<?php

function additionner($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new InvalidArgumentException('Les deux paramètres doivent être des nombres');
    }

    return $a + $b;
}

echo additionner(12, 3), '<br />';
echo additionner('azerty', 54), '<br />';
echo additionner(4, 8);