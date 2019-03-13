<?php    

echo $message.'<br>';
echo $message_internaute.'<br>';
//var_dump($resultat_requete_sql);

//echo $this->calendar->generate();

foreach ($resultat_requete_sql as $row){
    
    echo $row->titre.'<hr>';
    
    }
  
?>

