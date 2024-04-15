<p align="center">
<img src="readme-files/covid-19.png"  alt="Covid-19" width="30%"/>
</p>

<h1 align="center">
    Coronavírus Dashboard
</h1>

<p align="center">
   <b><i>Exibição dos Dados de Óbitos e Casos de Covid-19 nos países Brazil, Canada e Australia.</i></b><br>
</p>


<p align="center">
        <img alt="Project Made at April 2024" src="https://img.shields.io/badge/%20%20creation-march%2F2024-be0ea3">
        <img alt="Code Size in bytes" src="https://img.shields.io/github/languages/code-size/kellymoreira/Coronavirus-Dashboard?color=25beae" />
	<img alt="Main Language" src="https://img.shields.io/github/languages/top/kellymoreira/Coronavirus-Dashboard?color=be0ea3"/>
      <!--  <img alt="Project Status" src="https://img.shields.io/badge/status-completed-25beae"> -->
</p>


<p align="center">
    <samp>
    <a href="#Sobre">SOBRE</a>
   | <a href="#Tecnologias">TECNOLOGIAS</a>
   | <a href="#Dependências">DEPENDÊNCIAS</a>
   | <a href="#Inicialização">INICIALIZAÇÃO</a>
   | <a href="#BD">BANCO DE DADOS</a>
   | <a href="#Contatos">CONTATOS</a>
     </samp>
</p>


<h2 id="Sobre">Sobre</h2>

>**Coronavirus Dashboard** é um sistema que permite o usuário obter informações sobre os casos de mortes e confirmados que foram afetados pela Covid-19. <br>
>Ele fornece dados sobre o número de casos confirmados e mortes em três países específicos. <br>

**Deploy:** https://bit.ly/coronavirus-dashboard-countries

<h2 id="Tecnologias">Tecnologias</h2>

- `XAMPP`
- `PHP`
- `MySQL`
- `JavaScript`
- `CSS`
- `HTML`
- `Chart.js`

<h2 id="Dependências">Dependências</h2>

- **XAMPP Control Panel v3.3.0**: Utilizado para criar um ambiente de desenvolvimento local.
- **PHP v8.2.12**: Linguagem utilizada no backend.
- **MySQL**: Banco de Dados para guardar os horários e datas de acesso.
- **JavaScript, CSS3, HTML5**: Construção da interface para o usuário.
- **Chart.js 4.4.2**: Biblioteca JavaScript para criação de gráficos e visualizações de dados.

### Instalação
**Composer**
````
composer install
````
**Chart.js**
````
npm install chart.js
````


<h2 id="Inicialização">Como Inicializar e Configurar</h2>

Para rodar o projeto localmente, é necessário ter os seguintes programas instalados:
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/)

### Caso não os tenha, recomendo seguir a ordem dos tutoriais:
- Como instalar **XAMPP**:
   [LINK](https://www.youtube.com/watch?v=VCHXCusltqI)

- Como instalar **PHP** e **Composer**: 
   [LINK](https://www.youtube.com/watch?v=pS0U-PsXUlg)

>**OBS:**  No tutorial de instalação do **Composer**, é importante utilizar o caminho do arquivo correto. <br>
Assim como está descrito: `C:\xampp\php\php.exe`* <br>

<img src="readme-files/xampp-location.png"  alt="xampp" width="50%"/>


## Dependências Instaladas? Vamos rodar:
- Abra o **XAMPP** e clique no botão `start` dos serviços `Apache` e `MySQL`

- Com os serviços rodando, abra o diretório local `C:\xampp\htdocs` e clone o projeto:
````
$ git clone https://github.com/kellymoreira/Coronavirus-Dashboard.git
````
**Importante** 
<br>
Tenha certeza de abrir o arquivo `coronavirus-dashboard` na localização:
`C:\xampp\htdocs\coronavirus-dashboard`

Com tudo funcionando, digite no navegador: <br>
http://localhost/coronavirus-dashboard/



<h2 id="BD">Banco de Dados</h2>

**phpMyAdmin** foi utilizado para administrar os dados de acesso aos logs:
- Data e horário do último acesso `(dd/mm/aaaa - hh:mm:ss)`
- Qual país foi Consultado `(Brazil, Australia ou Canada)`

### Configurando:

Crie um arquivo `.env` com as informações específicas do Banco de Dados criado
```
DB_HOST=host
DB_NAME=database
DB_USER=user
DB_PASSWORD=password
```

**SQL preview**
```sql
CREATE TABLE `covid_19`.`access_records` (
`id` INT NULL AUTO_INCREMENT , 
`access_date_time` DATETIME NOT NULL , 
`country` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;
```




Para a conexão funcionar corretamente, vale ressaltar a importância de possuir uma senha configurada. <br>
Quando acessado o Banco de Dados de início, não há uma senha pré-configurada.
Caso não possuir, assista esse vídeo para configurar uma: [LINK](https://youtu.be/LltCLFxQ2Yk?si=LBwfhjo7HOrWLCBH)










<h2 id="Contatos">Contatos</h2>

<a href="https://www.linkedin.com/in/kelly-cristina-moreira/">
    <img src="readme-files/linkedin.png" alt="LinkedIn Icon" width="5%" />
</a>
<a href="mailto:kelly.moreira0510@gmail.com">
    <img src="readme-files/gmail.png" alt="Gmail Icon" width="5%" />
</a>
