<?php

include 'conexao/conexao.php';

$id_pessoa = $_POST['id_pessoa'];

$query = "SELECT * FROM pessoas WHERE id_pessoa = $id_pessoa ";
$busca_pessoa = mysqli_query($conexao, $query);

$linha = mysqli_fetch_array($busca_pessoa);
$nome_pessoa = $linha['nome_pessoa'];
$data_nascimento = date('d/m/Y',strtotime($linha['data_nascimento']));
$idade = $linha['idade'];
$endereco = $linha['endereco'];
$telefone = $linha['telefone'];
$celular = $linha['celular'];
$data_inscricao = date('d/m/Y',strtotime($linha['data_inscricao']));

$query = "SELECT c.nome, c.tipo FROM competencias c JOIN pessoa_competencia pc ON (c.id_competencia = pc.id_competencia) WHERE pc.id_pessoa = $id_pessoa";
$busca_pessoa_competencia = mysqli_query($conexao, $query);

$campo_comportamentais = '';
$campo_tecnicas = '';
while($linha = mysqli_fetch_array($busca_pessoa_competencia)){
    if($linha['tipo'] == 'Comportamental') {
        $campo_comportamentais.= $linha['nome'].',';
    } else if($linha['tipo'] == 'Tecnica') {
        $campo_tecnicas.= $linha['nome'].',';
    }
}

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i');

require_once __DIR__ . '/vendor/autoload.php';

$html = "
    <fieldset>
    <h1>Certificado</h1>
    <p class='direita'>Belo Horizonte, $date </p>

    <p>Nome: <strong>$nome_pessoa</strong></p>
    <p>Data de Nascimento: <strong>$data_nascimento</strong><nbsp> Idade: <strong>$idade</strong></p>
    <p>Telefone Residencial: <strong>$telefone</strong><nbsp> Celular: <strong>$celular</strong></p>
    <p>Endereço: <strong>$endereco</strong></p>
    <p>Competências Comportamentais: <strong>$campo_comportamentais</strong></p>
    <p>Competências Técnicas: <strong>$campo_tecnicas</strong></p>
    <br>
    <p class='center'>Certificamos que <strong>$nome_pessoa</strong> está inscrito(a) desde o dia $data_inscricao no Time Inovação.</p>
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

