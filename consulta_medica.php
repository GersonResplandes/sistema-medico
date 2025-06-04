<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente_id = $_POST['paciente_id'];
    $medico_id = $_POST['medico_id'];
    $data_consulta = $_POST['data_consulta'];
    $diagnostico = $_POST['diagnostico'];
    $encaminhamentos = $_POST['encaminhamentos'];
    $exames = $_POST['exames'];

    $sql = "INSERT INTO consultas (paciente_id, medico_id, data_consulta, diagnostico, encaminhamentos, exames) 
            VALUES ('$paciente_id', '$medico_id', '$data_consulta', '$diagnostico', '$encaminhamentos', '$exames')";

    if ($conexao->query($sql) === TRUE) {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
                <i class='bi bi-check-circle-fill me-2'></i>
                <div>Consulta registrada com sucesso!</div>
              </div>";
    } else {
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <i class='bi bi-exclamation-triangle-fill me-2'></i>
                <div>Erro ao registrar consulta: " . $conexao->error . "</div>
              </div>";
    }
}
$pacientes = $conexao->query("SELECT id, nome FROM pacientes ORDER BY nome");
$medicos = $conexao->query("SELECT id, nome, especialidade FROM medicos ORDER BY nome");

include 'header.php';
?>

<div class="page-header">
    <div class="container">
        <h1 class="display-4 mb-0">Registro de Consulta</h1>
        <p class="lead mb-0">Registre uma nova consulta médica</p>
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
                                <h5 class="mb-0">Informações da Consulta</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="paciente_id" class="form-label">Paciente</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <select class="form-select" id="paciente_id" name="paciente_id" required>
                                                <option value="">Selecione o paciente...</option>
                                                <?php while($paciente = $pacientes->fetch_assoc()): ?>
                                                    <option value="<?php echo $paciente['id']; ?>">
                                                        <?php echo $paciente['nome']; ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="medico_id" class="form-label">Médico</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                            <select class="form-select" id="medico_id" name="medico_id" required>
                                                <option value="">Selecione o médico...</option>
                                                <?php while($medico = $medicos->fetch_assoc()): ?>
                                                    <option value="<?php echo $medico['id']; ?>">
                                                        <?php echo $medico['nome'] . ' - ' . $medico['especialidade']; ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="data_consulta" class="form-label">Data da Consulta</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                            <input type="datetime-local" class="form-control" id="data_consulta" name="data_consulta" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Avaliação Médica</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="diagnostico" class="form-label">Diagnóstico</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-clipboard2-pulse"></i></span>
                                        <textarea class="form-control" id="diagnostico" name="diagnostico" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="encaminhamentos" class="form-label">Encaminhamentos</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-arrow-right-circle"></i></span>
                                        <textarea class="form-control" id="encaminhamentos" name="encaminhamentos" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exames" class="form-label">Exames Solicitados</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-clipboard2-check"></i></span>
                                        <textarea class="form-control" id="exames" name="exames" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="index.php" class="btn btn-outline-secondary me-md-2">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-2"></i>Registrar Consulta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> 