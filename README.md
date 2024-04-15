<p align="center">
<img src="./img/covid.png"  alt="Covid-19" width="30%"/>
</p>

<h1 align="center">
    Coronavírus Dashboard
</h1>

<p align="center">
   <b><i>A Brief Description.</i></b><br>
</p>


<p align="center">
        <img alt="Project Made at April 2024" src="https://img.shields.io/badge/%20%20creation-march%2F2024-91ddf7">
        <img alt="Code Size in bytes" src="https://img.shields.io/github/languages/code-size/kellymoreira/ATM-Bank-System?color=fcb3cf" />
	<img alt="Main Language" src="https://img.shields.io/github/languages/top/kellymoreira/ATM-Bank-System?color=4682B4"/>
        <img alt="Project Status" src="https://img.shields.io/badge/status-completed-91ddf7">
</p>


<p align="center">
    <samp>
    <a href="#About">ABOUT</a>
   | <a href="#Technologies">TECHNOLOGIES</a>
   | <a href="#Usage">USAGE</a>
   | <a href="#Resources">RESOURCES</a>
   | <a href="#Documentation">DOCUMENTATION</a>
   | <a href="#Feedbacks">FEEDBACKS</a>
     </samp>
</p>


<h2 id="Sobre">📋Sobre</h2>

>*O exercício consistirá na construção de um sistema (interface web) que possibilite ao usuário obter informações sobre os casos de mortes por Covid. Estes dados serão obtidos por meio da API-Covid-19 que está >disponível no servidor da Kidopi. É possível obter dados do número de casos confirmados e mortes de vários países afetados pela COVID-19.* <br>


<h2 id="Tecnologias">🛠️ Tecnologias</h2>

- `XAMPP`
- `PHP`
- `MySQL`
- `JavaScript`
- `CSS`
- `HTML`
- `Chart.js`

<h2 id="Dependências">📲 Dependências</h2>

- **XAMPP Control Panel v3.3.0**: Utilizado para criar um ambiente de desenvolvimento local.
- **PHP v8.2.12**: Linguagem utilizada no backend.
- **MySQL**: Banco de Dados para guardar os horários e datas de acesso.
- **JavaScript, CSS3, HTML5**: Construção da interface para o usuário.
- **Chart.js 4.4.2**: Biblioteca JavaScript para criação de gráficos e visualizações de dados.


<h2 id="Inicialização">📲 Como Inicializar e Configurar</h2>

Para rodar o projeto localmente, é necessário ter os seguintes programas instalados:
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/)

### Caso não os tenha, recomendo seguir a ordem dos tutoriais:
- Como Instalar XAMPP:
   [Link](https://www.youtube.com/watch?v=VCHXCusltqI)

- Como Instalar PHP e Composer: 
   [Link](https://www.youtube.com/watch?v=pS0U-PsXUlg)

>**OBS:**  No tutorial de instalação do **Composer**, é importante utilizar o caminho do arquivo correto. <br>
Assim como está descrito: `C:\xampp\php\php.exe`* <br>

<img src="readme-files/xampp-location.png"  alt="xampp" width="50%"/>


## Dependências Instaladas? Vamos rodar:
1. Abra o **XAMPP** e clique no botão `start` dos serviços `Apache` e `MySQL`

2. Com os serviços rodando, abra o diretório local `C:\xampp\htdocs` e clone o projeto:
````
$ git clone https://github.com/kellymoreira/Coronavirus-Dashboard.git
````
**Importante** 
<br>
Tenha certeza de abrir o arquivo `coronavirus-dashboard` na localização:
`C:\xampp\htdocs\coronavirus-dashboard`

Com os serviços devidamente ativados, digite no Navegador: <br>
http://localhost/coronavirus-dashboard/


<br>
<h2 id="Banco de Dados">🪑 Banco de Dados</h2>

**phpMyAdmin** foi utilizado para administrar os dados de acesso aos logs:
- Data e horário do último acesso `(dd/mm/aaaa - hh:mm:ss)`
- Qual país foi Consultado `(Brazil, Australia ou Canada)`

### Configurando:

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
Caso não possuir, assista esse vídeo para configurar uma: [Confira](https://youtu.be/LltCLFxQ2Yk?si=LBwfhjo7HOrWLCBH)









<br>
<h2 id="Contact">📲 Contact</h2>

<a href="https://www.linkedin.com/in/kelly-cristina-moreira/">
    <img src="readme-files/linkedin.png" alt="LinkedIn Icon" width="8%" />
</a>
<a href="mailto:kelly.moreira0510@gmail.com">
    <img src="readme-files/gmail.png" alt="Gmail Icon" width="8%" />
</a>
