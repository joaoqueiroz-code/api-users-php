# API Users PHP

Este projeto é uma API RESTful simples para gerenciamento de usuários, desenvolvida em PHP puro utilizando XAMPP e MySQL.

---

## ⚙️ Tecnologias e Ferramentas

- **PHP** (versão 7.4 ou superior)
- **MySQL** (via XAMPP)
- **Postman** (ou qualquer ferramenta para testar APIs)
- **Composer** (opcional, caso deseje gerenciar dependências futuramente)

---

## 💻 Como Instalar e Rodar Localmente

### Pré-requisitos

- XAMPP instalado e configurado
- PHP habilitado
- MySQL em execução

### Passos

1️⃣ Clone o repositório:

```bash
git clone https://github.com/joaoqueiroz-code/api-users-php.git
```

2️⃣ Mova a pasta do projeto para o diretório `htdocs` do XAMPP:

```bash
mv api-users-php /caminho/para/seu/htdocs/
```

3️⃣ Inicie o Apache e MySQL no painel do XAMPP.

4️⃣ Crie o banco de dados:

- Acesse `http://localhost/phpmyadmin`
- Crie um banco chamado `api_users`
- Importe ou crie a seguinte tabela:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 🌐 Endpoints Disponíveis

### ✅ Listar todos os usuários

```
GET /api/users
```

---

### 🔎 Buscar usuário por ID

```
GET /api/users/{id}
```

---

### ➕ Criar novo usuário

```
POST /api/users
```

**Body (JSON):**

```json
{
  "name": "Nome do Usuário",
  "email": "email@exemplo.com"
}
```

---

### ♻️ Atualizar usuário

```
PUT /api/users/{id}
```

**Body (JSON):**

```json
{
  "name": "Novo Nome",
  "email": "novoemail@exemplo.com"
}
```

---

### 🗑️ Deletar usuário

```
DELETE /api/users/{id}
```

---

## 🧪 Testando a API

Você pode utilizar ferramentas como **Postman**, **Insomnia**, ou realizar requisições via CURL:

```bash
curl -X GET http://localhost/api-users-php/api/users
```

Para POST:

```bash
curl -X POST -H "Content-Type: application/json" -d '{"name": "João", "email": "joao@email.com"}' http://localhost/api-users-php/api/users
```

---

## 💡 Estrutura de Pastas

```
api-users-php/
├── api/
│   ├── users/
│   │   ├── index.php        # Endpoint principal
│   │   ├── create.php       # Cria usuário
│   │   ├── read.php         # Lista usuários
│   │   ├── update.php       # Atualiza usuário
│   │   └── delete.php       # Deleta usuário
├── config/
│   └── database.php         # Configuração de conexão com o banco
├── .htaccess                # Redirecionamentos e configuração de rotas
├── README.md
└── ...
```

---

## 📌 Melhorias Futuras

- Adicionar autenticação JWT
- Validação mais robusta dos campos (ex: verificar formato do e-mail)
- Implementar testes automatizados
- Paginação e filtros nas listagens
- Middleware de tratamento global de erros
