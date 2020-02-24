<?php
    require_once('./db.php');

    $key = htmlspecialchars($_GET['key']);
    if(!empty($key)) {
 
    $query = $pdo->prepare( "DELETE FROM links WHERE id =:id" );
        $query->bindParam(':id', $key);
        $query->execute();
        if( ! $query->rowCount() ) echo "Ошибка удаления";
    
    }
      header('Location: /');
?>