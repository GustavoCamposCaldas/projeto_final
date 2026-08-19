# 🚀 Conecta Vagas DF - Versão 7.0

Sistema Web de Gerenciamento e Divulgação de Vagas de Emprego do Distrito Federal desenvolvido em PHP, MySQL e Bootstrap 5.

---

## 📁 Estrutura de Arquivos

```text
conecta-vagas-df-7.0/
├── index.php                # Roteador principal
├── .htaccess                # Configurações do Apache
├── README.md                # Instruções de execução
├── assets/
│   ├── css/
│   │   └── style.css        # Estilos customizados
│   └── js/
│       └── script.js        # Scripts de interface
├── includes/
│   ├── config.php           # Conexão PDO e constantes
│   ├── functions.php        # Funções utilitárias e consultas
│   ├── header.php           # Topo e navegação
│   └── footer.php           # Rodapé da página
├── pages/
│   ├── home.php             # Dashboard inicial com estatísticas e destaques
│   ├── vagas.php            # Listagem de vagas e modal de cadastro
│   ├── vaga.php             # Detalhes da vaga e formulário de candidatura
│   ├── candidatos.php       # Tabela de gestão de candidatos
│   └── dashboard.php        # Painel estatístico e métricas
└── database/
    └── schema.sql           # Script de criação de tabelas e dados de teste
```

---

## 🛠️ Como Rodar no VS Code

### 🔹 Opção A: Usando o XAMPP (Recomendado)
1. **Copie a pasta do projeto** para a pasta `htdocs` do XAMPP:
   `C:\xampp\htdocs\conecta-vagas-df-7.0`
2. **Abra o XAMPP Control Panel** e clique em **Start** no **Apache** e no **MySQL**.
3. **Crie o Banco de Dados:**
   - Acesse no navegador: `http://localhost/phpmyadmin/`
   - Clique na aba **SQL**
   - Cole o conteúdo do arquivo `database/schema.sql` e clique em **Executar**.
4. **Abra a pasta no VS Code:**
   - No VS Code: `Arquivo -> Abrir Pasta...` -> Selecione `C:\xampp\htdocs\conecta-vagas-df-7.0`.
5. **Acesse no navegador:**
   - [http://localhost/conecta-vagas-df-7.0/](http://localhost/conecta-vagas-df-7.0/)

---

### 🔹 Opção B: Direto pelo Terminal do VS Code (PHP Built-in Server)
1. Abra a pasta do projeto no VS Code (`Ctrl + K, Ctrl + O`).
2. Abra o terminal integrado do VS Code (`Ctrl + '` ou `Terminal -> Novo Terminal`).
3. Certifique-se de que o **MySQL** está iniciado (no XAMPP ou serviço local) e que importou o `database/schema.sql`.
4. Digite no terminal do VS Code:
   ```bash
   php -S localhost:8000
   ```
5. Abra no navegador:
   [http://localhost:8000](http://localhost:8000)
