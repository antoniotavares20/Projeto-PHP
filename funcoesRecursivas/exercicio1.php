<?php
$hirerarquia = array(
	array(
		'nome_cargo' => 'CIO',
		'subordinado' => array(
				//inicio diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinado' => array(
							//inicio gerente de vendas
						array(	'nome_cargo' =>'Gerente de Vendas'
						)
						

							//termino gerente de vendas;
						)
			    ),
		//termino diretor comercial
				array(
					'nome_cargo' => 'Financeiro','subordinado' => array(
						//inicio gerentente de contas a pagar
							array(
							    'nome_cargo'=>'Gerente de Contas a Pagar', 'subordinado' =>array(
							    	//Inicio supervisor de pagamentos
							    	
							    		array('nome_cargo' => 'Supervisor de Pagamentos'
							    	//termino supervisor de pagamentos
							    ))),
							//termino gerente de contas a pagar
							//inicio gerente de contas a pagar
							array(
								'nome_cargo' =>'Gerente de Compras', 
								'subordinado' => array(
									array('nome_cargo'=>'Supervisor de Suprimentos'
									)
								//termino supervisor de suprimentos	   
				)//termino diretor financeiro
			)
	))))
);

//esta função chamada de tree view consiste em uma lista recursiva para exibição de uma lista.
function exibe($cargos){
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= '<li>';
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinado'])&& count($cargo['subordinado'])>0)
		$html .= exibe($cargo['subordinado']);

	}
			$html .= "</li>";

	$html .- '</ul>';
	return $html;
}
echo exibe($hirerarquia);

?>