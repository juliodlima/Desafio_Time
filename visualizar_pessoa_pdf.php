<?php

include 'conexao/conexao.php';

$id_pessoa = $_POST['id_pessoa'];

$query = "SELECT * FROM pessoas WHERE id_pessoa = $id_pessoa ";
$busca_pessoa = mysqli_query($conexao, $query);

$linha = mysqli_fetch_array($consulta_pessoas);
$nome = $linha['nome'];
$data_nascimento = $linha['data_nascimento'];
$idade = $linha['idade'];
$endereco = $linha['endereco'];
$telefone = $linha['telefone'];
$celular = $linha['celular'];
$comp_comportamentais = $linha['comp_comportamentais'];
$comp_tecnicas = $linha['comp_tecnicas'];
$data_inscricao = $linha['data_inscricao'];

date_default_timezone_set('America/Sao_Paulo');
$date = date('d-m-Y H:i');

require_once __DIR__ . '/vendor/autoload.php';




$html = "
    <fieldset>
    <h1>Certificado</h1>
    <p class='direita'>Belo Horizonte, $date </p>

    <p>Nome: <strong>$nome</strong></p>
    <p>Data de Nascimento: <strong>$data_nascimento</strong><nbsp> Idade: <strong>$idade</strong></p>
    <p>Telefone Residencial: <strong>$telefone</strong><nbsp> Celular: <strong>$celular</strong></p>
    <p>Endereço: <strong>$endereco</strong></p>
    <p>Competências Comportamentais: <strong>$comp_comportamentais</strong></p>
    <p>Competências Técnicas: <strong>$comp_tecnicas</strong></p>
    <br>
    <p class='center'>Certificamos que <strong>$nome</strong> está inscrito(a) desde o dia $data_inscricao no Time Inovação.</p>
    <br>
    <p>Assinatura ......................................................................................................................................</p>

    </fieldset>
    <div class='creditos center'>
        <p>©‎2019 TimeInovação - Todos os direitos reservados.</p>
    </div>
    ";

$mpdf = new \Mpdf\Mpdf(); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->AddPage('L');
$css = file_get_contents("css/estilo_pdf.css");
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output("certificado_$date.pdf","I");

exit;

