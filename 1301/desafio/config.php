<?php
$conectando = new mysqli ('localhost:3306','root','','empresa_azt');
if($conectando->connect_errno){
    echo "tem algo errado";

}
else{ 
    echo " ";
}
?>