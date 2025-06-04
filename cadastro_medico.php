<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $especialidade = $_POST['especialidade'];
    $crm = $_POST['crm'];

    $sql = "INSERT INTO medicos (nome, cpf, idade, data_nascimento, sexo, rua, bairro, cep, cidade, estado, especialidade, crm) 
            VALUES ('$nome', '$cpf', '$idade', '$data_nascimento', '$sexo', '$rua', '$bairro', '$cep', '$cidade', '$estado', '$especialidade', '$crm')";

    if ($conexao->query($sql) === TRUE) {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
                <i class='bi bi-check-circle-fill me-2'></i>
                <div>Médico cadastrado com sucesso!</div>
              </div>";
    } else {
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <i class='bi bi-exclamation-triangle-fill me-2'></i>
                <div>Erro ao cadastrar: " . $conexao->error . "</div>
              </div>";
    }
}

include 'header.php';
?>

<div class="page-header">
    <div class="container">
        <h1 class="display-4 mb-0">Cadastro de Médico</h1>
        <p class="lead mb-0">Preencha os dados do médico abaixo</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body p-4">
                    <form method="POST" class="needs-validation" novalidate>
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Informações Pessoais</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" id="nome" name="nome" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                            <input type="text" class="form-control" id="cpf" name="cpf" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="idade" class="form-label">Idade</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                            <input type="number" class="form-control" id="idade" name="idade" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                            <select class="form-select" id="sexo" name="sexo" required>
                                                <option value="">Selecione...</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                                <option value="O">Outro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Informações Profissionais</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="especialidade" class="form-label">Especialidade</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-briefcase"></i></span>
                                            <input type="text" class="form-control" id="especialidade" name="especialidade" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="crm" class="form-label">CRM</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-card-heading"></i></span>
                                            <input type="text" class="form-control" id="crm" name="crm" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Endereço</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="rua" class="form-label">Rua</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                            <input type="text" class="form-control" id="rua" name="rua" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="bairro" class="form-label">Bairro</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-geo"></i></span>
                                            <input type="text" class="form-control" id="bairro" name="bairro" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-pin-map"></i></span>
                                            <input type="text" class="form-control" id="cep" name="cep" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-building"></i></span>
                                            <input type="text" class="form-control" id="cidade" name="cidade" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                            <select class="form-select" id="estado" name="estado" required>
                                                <option value="">Selecione...</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="index.php" class="btn btn-outline-secondary me-md-2">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-2"></i>Cadastrar Médico
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> 