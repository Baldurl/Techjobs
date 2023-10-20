<?php
    header('Content-Type: text/html; charset=utf-8;');
    
    require_once '../src/conexao.php';

    $nome = $_POST['nome'];
    $razao_social = $_POST['razao_social'];
    /* $cpf = $_POST['cpf']; */
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    /* $sexo = $_POST['sexo']; */
    $ddi = $_POST['ddi'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $complemento = $_POST['complemento'];
    $perfil = 'empresa';

    # recebe os valores enviados do formulário via método post.
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? 0;
    $nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para inserir dados na tabela usuarios.
    $query = "UPDATE tecjobs.empresa SET nome = :nome 
                WHERE id = :id;"; 
    
    # prepara a execução da query e retorna para uma variável chamada stmt.
    $stmt = $dbh->prepare($query);

    # com a variável stmt, usada bindParam para associar a cada um dos parâmetro
    # e seu tipo (opcional).
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':razao_social', $razao_social);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cnpj', $cnpj);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':ddi', $ddi);
    $stmt->bindParam(':ddd', $ddd);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':logradouro', $logradouro);
    $stmt->bindParam(':bairro', $bairro);
    $stmt->bindParam(':rua', $rua);
    $stmt->bindParam(':complemento', $complemento);
    
    # executa a instrução contida em stmt e se tudo der certo retorna uma valor maior que zero.
    $result= $stmt->execute();
    $dbh = null;
    if ($result) {
        header('location: login.php?msg=Perfil atualizado com sucesso!');
    } else {
        header('location: login.php?error=Não foi possível atualizar o perfil!');
    }