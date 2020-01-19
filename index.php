
        <?php
        
        $idade = $_GET['idade'];
        $peso = $_GET['peso'];
        
        
        
        if ($idade >=16 and $idade <=65 and $peso >=50){
            echo "atende aos requisitos!";
        } else {
            echo "Não atende aos requisitor";
        }
        ?>
