<?php
require_once 'Back/Controller/Controller.php';

$c = new Controller();

$lista = $c->Menu();
$lista2 = $c->SubMenu();

echo '<div class="header__menu">';
echo '<ul class="header__menu--items">';


for ($i=0; $i < count($lista); $i++) { 
    $m = $lista[$i];
    echo "<li class='header__menu--item'><a href='".$m->getUbicacion()."' class='header__menu--link'>".$m->getNombre()."</a>";
    for ($y=0; $y < count($lista2); $y++) { 
        $sm = $lista2[$y];
        if ($sm->getMenu() == $m->getId()) {
            echo "<ul class='submenu--items'>";
            for ($y=0; $y < count($lista2); $y++) { 
                $sm = $lista2[$y];
                if ($sm->getMenu() == $m->getId()) {
                    if ($sm->getTipo() == 1 || $sm->getTipo() == 3) {
                        echo "<li class='submenu--item'><a target='_Blank' href='".$sm->getUbicacion()."' class='submenu--link'>".$sm->getNombre()."</a></li>";
                    }else{
                    echo "<li class='submenu--item'><a href='".$sm->getUbicacion()."' class='submenu--link'>".$sm->getNombre()."</a></li>";
                    }
                }

            }
            echo "</ul>";
        }
    }
    echo "</li>";
}

echo '</ul>
<a href="#" class="object__link object__link--movil">WebMail</a>
</div>';