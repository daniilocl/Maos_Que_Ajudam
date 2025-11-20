# 🤝 Mãos Que Ajudam

<div align="center">

![Mãos Que Ajudam Banner](https://img.shields.io/badge/ONG-M%C3%A3os_Que_Ajudam-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Ativo-success?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge)

**Plataforma web para gestão de ONGs que apoiam crianças em situação de vulnerabilidade social**

[Sobre](#-sobre) •
[Funcionalidades](#-funcionalidades) •
[Tecnologias](#-tecnologias) •
[Instalação](#-instalação) •
[Como Usar](#-como-usar) •
[Contribuir](#-contribuir)

</div>

---

## 📖 Sobre

O **Mãos Que Ajudam** é um sistema web desenvolvido para facilitar a gestão de organizações não governamentais (ONGs) que trabalham com crianças em situação de vulnerabilidade social. O projeto oferece uma interface intuitiva e responsiva para o cadastro, listagem e gerenciamento de informações de voluntários e beneficiários.

### 🎯 Objetivo

Proporcionar uma ferramenta gratuita e eficiente que permita às ONGs organizarem melhor suas operações, facilitando o acompanhamento de voluntários e o atendimento às crianças assistidas.

---

## ✨ Funcionalidades

### 👥 Gestão de Voluntários
- ✅ Cadastro completo de voluntários
- ✅ Visualização de informações

### 🔐 Painel Administrativo
- ✅ Login seguro para administradores
- ✅ Listagem e busca de voluntários
- ✅ Atualização de informações
- ✅ Controle de status (ativo/inativo)
- ✅ Gestão completa do sistema

### 📱 Design Responsivo
- ✅ Interface adaptável para todos os dispositivos
- ✅ Experiência otimizada em mobile
- ✅ Acessibilidade aprimorada

---

## 🚀 Tecnologias

O projeto foi desenvolvido utilizando as seguintes tecnologias:

### Frontend
- **HTML5** - Estruturação semântica
- **CSS3** - Estilização e responsividade
- **JavaScript** - Interatividade e validações

### Backend
- **PHP** - Lógica de servidor e processamento
- **MySQL** - Banco de dados relacional

### Ferramentas
- **Git** - Controle de versão
- **GitHub** - Hospedagem do código

---

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

```bash
- PHP >= 7.4
- MySQL >= 5.7
- Apache ou Nginx
- Composer (opcional)
```

---

## 🔧 Instalação

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/daniilocl/Maos_Que_Ajudam.git
cd Maos_Que_Ajudam
```

### 2️⃣ Configure o banco de dados

```sql
-- Crie o banco de dados
CREATE DATABASE maos_que_ajudam;

-- Importe o arquivo SQL (se disponível)
mysql -u seu_usuario -p maos_que_ajudam < database/schema.sql
```

### 3️⃣ Configure as credenciais

Edite o arquivo de configuração do banco de dados:

```php
// config/database.php
define('DB_HOST', 'localhost');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
define('DB_NAME', 'maos_que_ajudam');
```

### 4️⃣ Configure o servidor

Para ambiente de desenvolvimento, você pode usar o servidor embutido do PHP:

```bash
php -S localhost:8000
```

Ou configure seu Apache/Nginx apontando para a pasta raiz do projeto.

---

## 💻 Como Usar

### Acesso ao Sistema

1. Acesse `http://localhost:8000` no seu navegador
2. Faça login com suas credenciais de administrador
3. Navegue pelos módulos disponíveis

### Cadastro de Voluntários

1. Acesse a página de cadastro
2. Preencha os dados solicitados
3. Envie o formulário

### Painel Administrativo

1. Acesse o sistema com credenciais de administrador
2. Gerencie voluntários (listagem, edição, exclusão)
3. Controle todas as funcionalidades do sistema

---

## 📁 Estrutura do Projeto

```
Maos_Que_Ajudam/
├── public/
│   ├── css/               # Arquivos de estilo
│   │   ├── home.css
│   │   └── style.css
│   └── imagens/           # Imagens do projeto
│       ├── logo/
│       ├── camisa.azul/
│       ├── doacoes/
│       ├── parcerias/
│       ├── projetos/
│       └── voluntarios/
├── src/
│   ├── components/        # Componentes reutilizáveis
│   │   ├── footer.php
│   │   └── header.php
│   ├── controllers/       # Controladores da aplicação
│   │   ├── cadastro_volu.php
│   │   ├── cadastro.php
│   │   ├── login.php
│   │   └── logout.php
│   ├── db/                # Configuração do banco
│   │   ├── connection.php
│   │   └── maos_que_aju... (Banco de dados)
│   └── models/            # Modelos de dados
│       └── Usuario.php
├── utils/                 # Funções auxiliares
│   └── auth_helper.php
├── views/                 # Views da aplicação
│   ├── login/
│   │   ├── login.css
│   │   ├── login.php
│   │   └── script.js
│   ├── administracao.php
│   ├── cadastro_volu...
│   ├── contribuicoes.css
│   ├── contribuicoes.php
│   ├── doacoes.css
│   ├── doacoes.php
│   ├── projetos.css
│   ├── projetos.php
│   └── index.php
└── README.md              # Este arquivo
```

---

## 🤝 Contribuir

Contribuições são sempre bem-vindas! Para contribuir:

1. Faça um **fork** do projeto
2. Crie uma **branch** para sua feature (`git checkout -b feature/MinhaFeature`)
3. **Commit** suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Faça o **push** para a branch (`git push origin feature/MinhaFeature`)
5. Abra um **Pull Request**

### 📝 Diretrizes de Contribuição

- Mantenha o código limpo e bem documentado
- Siga os padrões de codificação do projeto
- Teste suas alterações antes de submeter
- Descreva claramente as mudanças no Pull Request

---

## 🐛 Reportar Problemas

Encontrou um bug ou tem uma sugestão? Abra uma [issue](https://github.com/daniilocl/Maos_Que_Ajudam/issues) detalhando:

- Descrição do problema
- Passos para reproduzir
- Comportamento esperado
- Screenshots (se aplicável)

---

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 👨‍💻 Autores

Este projeto foi desenvolvido em equipe por:

### **Danilo** - CRUD e Backend
- GitHub: [@daniilocl](https://github.com/daniilocl)
- Responsável pela lógica de negócio e operações de banco de dados

### **Silas** - Frontend
- Desenvolvimento da interface e experiência do usuário

### **Kaic** - Banco de Dados
- Modelagem e estruturação do banco de dados

### **Gabriel** - Design
- Criação da identidade visual e layout do sistema

**Todos os membros colaboraram em diversas partes do projeto, contribuindo com suas especialidades e trabalhando em conjunto para o sucesso da aplicação.**

---

## 🙏 Agradecimentos

- A todas as ONGs que inspiraram este projeto
- À comunidade de desenvolvedores que contribui com ferramentas open source
- Aos voluntários que dedicam seu tempo para causas sociais

---

<div align="center">

**Desenvolvido com ❤️ por Danilo, Silas, Kaic e Gabriel**

⭐ Se este projeto foi útil para você, considere dar uma estrela!

</div>
