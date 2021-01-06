<?php
     if(isset($_SESSION['user'])){
          echo "<div class='pt-3 row'>";
     $data = $db->fetchAllPet();
     foreach($data as $d){
          echo "<div class='col-sm-3 text-center pb-3'>";
               echo '
                    <h4>Name: '.$d['petname'].'</h4>
                    <h6 class="text-truncate">Info: '.$d['petinfo'].'</h6>
                    <img class="pet-item" src="/petshop'.$d['petimg'].'">
               ';
          echo "</div>";
     }
     echo "</div>";
}   else{
     echo "<h1 class='text-center'> Hello ! You Must Login or SignUp </h1>";
}

?>
