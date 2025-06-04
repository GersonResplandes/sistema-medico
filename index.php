<?php include 'header.php'; ?>

<div class="page-header">
    <div class="container">
        <h1 class="display-4 mb-0">Bem-vindo ao Sistema Médico</h1>
        <p class="lead mb-0">Gerencie sua clínica de forma eficiente e organizada</p>
    </div>
</div>

<div class="container">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-person-plus" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h3 class="card-title h4 mb-3">Cadastro de Pacientes</h3>
                    <p class="card-text text-muted mb-4">
                        Gerencie o cadastro de pacientes com informações completas e detalhadas.
                    </p>
                    <a href="cadastro_paciente.php" class="btn btn-primary w-100">
                        <i class="bi bi-arrow-right-circle me-2"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-person-badge" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h3 class="card-title h4 mb-3">Cadastro de Médicos</h3>
                    <p class="card-text text-muted mb-4">
                        Mantenha o registro de médicos com suas especialidades e dados profissionais.
                    </p>
                    <a href="cadastro_medico.php" class="btn btn-primary w-100">
                        <i class="bi bi-arrow-right-circle me-2"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-calendar-check" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h3 class="card-title h4 mb-3">Consultas Médicas</h3>
                    <p class="card-text text-muted mb-4">
                        Registre e acompanhe todas as consultas, diagnósticos e exames solicitados.
                    </p>
                    <a href="consulta_medica.php" class="btn btn-primary w-100">
                        <i class="bi bi-arrow-right-circle me-2"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> 