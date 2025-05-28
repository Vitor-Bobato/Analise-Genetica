<!-- README.md - Analise Genetica -->

<h1 align="center">🧬 Sistema de Análise Genética</h1>
<p align="center"><i>Projeto desenvolvido para a disciplina de Desenvolvimento Web Mobile III</i></p>
<p align="center">
  <img src="https://img.icons8.com/color/100/000000/dna-helix.png" width="80" alt="DNA Helix Icon"/>
</p>

---

## 📋 Sobre o Projeto

Este sistema tem como objetivo facilitar o registro, consulta e gerenciamento de exames genéticos realizados em laboratório. O projeto foi desenvolvido utilizando o framework **Laravel** (PHP) e segue as boas práticas de desenvolvimento web, com interface amigável, responsiva e validações robustas.

---

## 🧑‍🔬 Funcionalidades

- Tela de **Boas-vindas** explicando o propósito do sistema
- Cadastro de **exames genéticos** com validação de dados
- Listagem dos exames já cadastrados
- Mensagens personalizadas de erro e sucesso
- Interface moderna, responsiva e com animações suaves

---

## 🗂️ Estrutura das Páginas

1. **Tela de Boas-vindas (`/`)**
   - Apresentação do sistema
   - Explicação das funcionalidades
   - Acesso rápido para cadastro e listagem de exames

2. **Cadastro de Exames (`/exames/novo`)**
   - Formulário para inserir um novo exame genético:
     - **Paciente:** Nome do paciente (obrigatório, máx. 100 caracteres)
     - **Número do Exame:** ID único, alfanumérico (obrigatório)
     - **Tipo de Exame:** Seleção entre Sequenciamento, PCR ou Microarray (obrigatório)
     - **Data de Coleta:** Data anterior ou igual à data atual (obrigatório)
     - **Laudo:** Descrição do exame (opcional, máx. 500 caracteres)
   - Validação de todos os campos com mensagens personalizadas
   - Botões para navegação rápida

3. **Listagem de Exames (`/exames`)**
   - Tabela com todos os exames cadastrados
   - Exibe paciente, número do exame, tipo, data de coleta, laudo e data de cadastro
   - Feedback visual caso não haja exames cadastrados

---

## 🏗️ Tecnologias Utilizadas

- [Laravel (PHP)](https://laravel.com/)
- [Blade Templating](https://laravel.com/docs/10.x/blade)
- [Bootstrap 5](https://getbootstrap.com/) (CDN)
- [Google Fonts - Montserrat](https://fonts.google.com/specimen/Montserrat)
- HTML5 & CSS3

---

## 🚀 Como Executar o Projeto

1. **Clone o repositório**
   ```bash
   git clone https://github.com/Vitor-Bobato/Analise-Genetica.git
   cd Analise-Genetica
   ```

2. **Instale as dependências**
   ```bash
   composer install
   ```

3. **Configure o ambiente**
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Ajuste as variáveis de banco de dados no `.env` conforme seu ambiente.

4. **Gere a chave da aplicação**
   ```bash
   php artisan key:generate
   ```

5. **Crie o banco de dados**
   - No seu SGBD favorito, crie um banco com o nome definido no `.env`.

6. **Execute as migrations**
   ```bash
   php artisan migrate
   ```

7. **Inicie o servidor local**
   ```bash
   php artisan serve
   ```
   - Acesse [http://localhost:8000](http://localhost:8000) no navegador.

---

## 👩‍💻 Estrutura do Código

```
/app
    /Http
        /Controllers
            ExameController.php
    /Models
        Exame.php
/resources
    /views
        /exames
            create.blade.php
            index.blade.php
        /layouts
            app.blade.php
        welcome.blade.php
/routes
    web.php
/database
    /migrations
        xxxx_xx_xx_create_exames_table.php
```

---

## 🖌️ Experiência do Usuário

- Layout responsivo, adequado para desktop e mobile
- Paleta de cores agradável (tons de azul e verde)
- Animações suaves em cards, botões e feedbacks
- Mensagens claras e objetivas ao usuário

---

## 🛡️ Validações dos Campos

- **Paciente:** obrigatório, até 100 caracteres
- **Número do Exame:** obrigatório, alfanumérico, único
- **Tipo de exame:** obrigatório, apenas “Sequenciamento”, “PCR”, “Microarray”
- **Data de coleta:** obrigatória, não pode ser futura
- **Laudo:** opcional, até 500 caracteres

---

## 📑 Exemplos de Uso

- Na tela inicial, clique em “Cadastrar novo exame”
- Preencha o formulário com os dados do paciente e exame
- Ao cadastrar com sucesso, você será redirecionado para a listagem, onde poderá visualizar todos os exames já cadastrados

---

## 🙋‍♂️ Contribuição

Pull requests, sugestões e melhorias são sempre bem-vindos!  
Abra uma issue para discutir qualquer alteração.

---

## 📄 Licença

Este projeto é de uso acadêmico para fins didáticos.

---

<p align="center" style="color:#1976d2; font-weight:700;">Desenvolvido por Vitor Bobato 🧬</p>
