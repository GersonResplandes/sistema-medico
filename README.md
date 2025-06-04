# 🏥 Sistema Médico

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

</div>

## 📋 Visão Geral

Sistema de gestão médica desenvolvido como projeto de estudo, implementando conceitos fundamentais de desenvolvimento web com PHP e MySQL. O projeto apresenta uma interface moderna e responsiva utilizando Bootstrap 5.

## 🚀 Funcionalidades

### 👥 Gestão de Pacientes

- Cadastro completo de pacientes
- Informações pessoais e endereço
- Histórico de consultas
- Validação de CPF

### 👨‍⚕️ Gestão de Médicos

- Registro de profissionais
- Especialidades médicas
- CRM e dados profissionais
- Agenda de consultas

### 📅 Consultas Médicas

- Agendamento de consultas
- Registro de diagnósticos
- Encaminhamentos
- Solicitação de exames

## 🛠️ Tecnologias Utilizadas

- **Backend**

  - PHP 7.4+
  - MySQL 5.7+
  - PDO para conexão com banco de dados

- **Frontend**
  - Bootstrap 5.3
  - HTML5
  - CSS3
  - JavaScript
  - Bootstrap Icons

## 📦 Estrutura do Projeto

```
sistema-medico/
├── conexao.php          # Configuração do banco de dados
├── index.php           # Página inicial
├── cadastro_paciente.php # Formulário de pacientes
├── cadastro_medico.php  # Formulário de médicos
├── consulta_medica.php  # Registro de consultas
├── header.php          # Cabeçalho comum
├── footer.php          # Rodapé comum
└── database.sql        # Estrutura do banco de dados
```

## ⚙️ Requisitos do Sistema

- Servidor web (Apache/Nginx)
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Navegador web moderno

## 🚀 Instalação

1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/sistema-medico.git
```

2. Importe o banco de dados

```bash
mysql -u seu_usuario -p < database.sql
```

3. Configure a conexão

```php
// conexao.php
$host = 'localhost';
$dbname = 'sistema_medico';
$username = 'seu_usuario';
$password = 'sua_senha';
```

4. Acesse via navegador

```
http://localhost/sistema-medico
```

## 🎨 Interface

<div align="center">
  <img src="screenshots/dashboard.png" alt="Dashboard" width="800"/>
</div>

## 🔒 Segurança

- Validação de dados de entrada
- Proteção contra SQL Injection
- Sanitização de inputs
- Validação de formulários

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

Seu Nome - [@seu-usuario](https://github.com/seu-usuario)

## 🤝 Contribuindo

1. Faça o fork do projeto
2. Crie sua feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📞 Suporte

Para suporte, envie um email para seu-email@exemplo.com ou abra uma issue no projeto.

---

<div align="center">
  <sub>Built with ❤️ by <a href="https://github.com/seu-usuario">Seu Nome</a></sub>
</div>
