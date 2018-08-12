<?php
//este codigo fala sobre funcoes anonimas
function test($callback){
	$callback();
};

test(function(){
	echo "Terminou";
});


?>