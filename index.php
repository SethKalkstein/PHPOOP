<header>
    <h1>Test</h1>
</header>
<body>
    <?php 
        DEFINE ('SOME_CONST', "I do not change");
        echo "<br>";
        echo "The const that doesn't change is \"".SOME_CONST."\" and that's okay.";
        echo "<br>";
        $asAr = [];
        $itAr = [];
        for($i = 1; $i <= 6; $i++){
            // echo "<h".$i."> Heading # ".$i.".</h".$i.">";
            echo "<h{$i}>Heading #{$i}.</h{$i}>";
            $randNum = rand(0,100);

            $asAr[$i."assoc"] = $randNum;
            $itAr[] = $randNum;

        }

        echo "<br>";
        echo var_dump($asAr);
        echo "<br>";
        echo var_dump($itAr);

        for($i = 0; $i < count($itAr); $i++ ){
            $asName = ($i+1)."assoc";
            echo "<br>Iterative ".$itAr[$i]."<br>";
            echo  "<br>Associative ".$asAr[$asName]."<br>";
        }
        
        foreach($asAr as $akey => $anElement ){
            echo  "<br>".$akey." Associative ".$anElement."<br>";
        }
    ?>   
</body>