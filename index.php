<?php

require_once ('Registro.php');
require_once ('Certidao.php');
require_once ('Contrato.php');
require_once ('Nascimento.php');
// require_once ('Casamento.php');
// require_once ('Obito.php');
// require_once ('Propriedade.php');
// require_once ('CompraEVenda.php');
// require_once ('PrestacaoDeServico.php');
// require_once ('ContratoDeTrabalho.php');
require_once ('Registrado.php');


$nascimento1 = new Nascimento;
$nascimento1->setNomeObjetos('Bruno');
$nascimento1->setNomeObjetos('Katia');
$nascimento1->setNomeObjetos('Simone');
$nascimento1->setTipo('Nascimento');
$nascimento1->registrarCertidao($nascimento1, 'Pedro Fonseca', 'Cartório da subprefeitura de Vila Prudente', '1883672872568');


// echo $nascimento1->getNomeObjetos();
echo $nascimento1->getNumeroRegistro();

// $casamento1 = new Casamento;
// $casamento1->setTipo('Casamento');

// $obito1 = new Obito;
// $obito1->setTipo('Obito');

// $propriedade1 = new Propriedade;
// $propriedade1->setTipo('Propriedade');


// $registrados = new Registrado;
// $registrados->adicionarCertidao($nascimento1);
// $registrados->adicionarCertidao($casamento1);
// $registrados->adicionarCertidao($obito1);
// $registrados->adicionarCertidao($propriedade1);
// $registrados->getCertidoes();
// echo $registrados->totalCertidoes();

// $compraEvenda1 = new CompraEVenda;
// $compraEvenda1->setNomeTestemunhas('Vanessa');
// $compraEvenda1->setNomeTestemunhas('Rodrigo');
// $compraEvenda1->setNomeTestemunhas('Zilma');
// $compraEvenda1->registrar('Maria de Fátima', 'Cartório de Santo André', '7253786794576');
// $compraEvenda1->setObjeto('Compra e Venda');

// echo $compraEvenda1->getNomeTestemunhas();
// echo $compraEvenda1->getNumeroRegistro();

// $servico1 = new PrestacaoDeServico;
// $servico1->setObjeto('Prestação de Serviços');

// $trabalho1 = new ContratoDeTrabalho;
// $trabalho1->setObjeto('Contrato de Trabalho');


// $registrados->adicionarContrato($compraEvenda1);
// $registrados->adicionarContrato($servico1);
// $registrados->adicionarContrato($trabalho1);
// $registrados->getContratos();
// echo $registrados->totalContratos();

// $nascimento2 = new Nascimento;
// $nascimento2->nomeObjetos



