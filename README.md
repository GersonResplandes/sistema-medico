# 🏥 Sistema Médico

<div align="center">
  <img src="https://readme-typing-svg.herokuapp.com?color=00BFFF&size=30&center=true&vCenter=true&width=900&lines=Sistema+de+Gestão+Médica+com+PHP+e+MySQL;Interface+Moderna+e+Responsiva;Fácil+de+Usar+e+Expandir"/>
</div>

<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
</div>

---

## 📋 Visão Geral

Sistema de gestão médica desenvolvido como projeto de estudo, implementando conceitos fundamentais de desenvolvimento web com PHP e MySQL. O projeto apresenta uma interface moderna e responsiva utilizando Bootstrap 5.

---

## 🚀 Funcionalidades

- 👥 **Gestão de Pacientes:** Cadastro, histórico, validação de CPF
- 👨‍⚕️ **Gestão de Médicos:** Registro, especialidades, agenda
- 📅 **Consultas Médicas:** Agendamento, diagnósticos, exames
- 🔒 **Segurança:** Validação, proteção contra SQL Injection, sanitização

---

## 🛠️ Tecnologias Utilizadas

<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
</div>

---

## 📦 Estrutura do Projeto

```text
sistema-medico/
├── conexao.php           # Configuração do banco de dados
├── index.php             # Página inicial
├── cadastro_paciente.php # Formulário de pacientes
├── cadastro_medico.php   # Formulário de médicos
├── consulta_medica.php   # Registro de consultas
├── header.php            # Cabeçalho comum
├── footer.php            # Rodapé comum
└── database.sql          # Estrutura do banco de dados
```

---

## ⚙️ Requisitos do Sistema

- Servidor web (Apache/Nginx)
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Navegador web moderno

---

## 🚀 Instalação Rápida

```bash
git clone https://github.com/GersonResplandes/sistema-medico.git
cd sistema-medico
```

1. Importe o banco de dados:
   ```bash
   mysql -u seu_usuario -p < database.sql
   ```
2. Configure a conexão em `conexao.php`:
   ```php
   $host = 'localhost';
   $dbname = 'sistema_medico';
   $username = 'seu_usuario';
   $password = 'sua_senha';
   ```
3. Acesse via navegador:
   ```
   http://localhost/sistema-medico
   ```

---

## 🎨 Interface

<div align="center">
  <img src="https://github.com/user-attachments/assets/a1cc485a-d71d-485d-8aa5-8b38a74da255" alt="Dashboard" width="800"/>
</div>

---

## 🔒 Segurança

- Validação de dados de entrada
- Proteção contra SQL Injection
- Sanitização de inputs
- Validação de formulários

---

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 👨‍💻 Autor

[Gérson Resplandes de Sá Sousa](https://github.com/GersonResplandes)

---

## 🤝 Contribuindo

1. Faça o fork do projeto
2. Crie sua feature branch (`git checkout -b feature/NovaFuncionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/NovaFuncionalidade`)
5. Abra um Pull Request

---

## 📞 Suporte

Para suporte, envie um email para sagerson@acad.ifma.edsu.br ou abra uma issue no projeto.

---

<div align="center">
  <img width="100%" src="https://capsule-render.vercel.app/api?type=waving&color=gradient&height=120&section=footer&animation=fadeIn"/>
</div>
