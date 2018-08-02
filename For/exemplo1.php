<?php
//observado a diferença na atribuição com relação a outras liguagens
for($i = 0; $i <= 1000; $i+= 5){
		if($i >= 200 && $i <= 900)continue;//pula a linha;
		if($i == 995) break;
			echo "Valor: ".$i."<br>";
		}


?