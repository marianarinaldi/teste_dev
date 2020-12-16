<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# teste_dev

#Eng. Rodolfo Romão

Desenvolver uma aplicação simples utilizando a linguagem de programação PHP usando uma framework (Laravel ou Codeigniter).
O objetivo desta avaliação é medir o nível de conhecimento do candidato nas áreas em que a vaga será exigida.

***** CASO VOCÊ NÃO TENHA CONHECIMENTO SOBRE LINUX OU DOCKER, FAVOR INICIAR O PROJETO USANDO A ESTRUTURA DE SUA PREFERÊNCIA.

************ Você poderá desenvolver o código inteiro e somente depois tentar configura o docker.

****************** Não vá para entrevista sem código algum dizendo que não sabe mexer com linux ou docker.

****************** Nesse repositório não tem código, assim não use código de outra pessoa, pois é bem fácil de detectar a "xerox".

#Escopo:
Deve-se criar uma aplicação em PHP para resolver o problema descrito abaixo, utilizando framework Laravel ou codeigniter. Fique a vontade para explorar todo o seu conhecimento em automação de tarefas, CSS e Javascript com JQuery ou qualquer outra ferramenta.

#Cenário fictício:
Prof. Jobim está lançando uma nova plataforma de ensino online. Nesta plataforma, desejamos realizar a matrícula de alunos em cursos através de um painel administrativo.

#Requisitos:
Um aluno pode ser matriculado em mais de um curso
O administrador do sistema que realizará as matrículas. Não é necessário desenvolver tela para alunos.
A consulta pelo nome, e-mail e/ou materia é requisito funcional.
É necessário desenvover tela de login / autenticação.
CRUD de Áreas de Cursos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma área de curso (Biologia, Química, Física, por exemplo).

#Atributos de um Curso são:
título (obrigatório)
descrição
CRUD de Alunos
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar um Aluno.

Atributos de um Aluno são:
nome (obrigatório)
email (obrigatório)
data de nascimento

#CRUD de Matrículas
Criar um gerenciamento aonde seja possível Criar, Listar, Editar e Visualizar uma matrícula.

#REST API
Deixe um webservice pronto para ser chamado que somente requisição com usuário e senha poderão utilizar tal serviço.

#Instruções:
Faça fork desse repositório envie-nos um Pull Request quando estiver pronto.
Deve ser utilizado:
    1) o Laravel ou codeigniter como framework PHP.
    2) o Composer para gerenciar as dependências da aplicação.
    3) docker em um ambiente linux para rodar a aplicação que será demosntrada via call.
    4) o código deve ser versionado no github.
       5.1) utilizar o git para subir cada funcionalidade, demonstrando que você sabe utiliza-lo.
       5.2) Gerar TAG após a conclusão de etapas/sptrints, para que seja possível realizar a rastreabilidade do desenvolvimento.
    5) apartir da data e hora do envio do e-mail (previamente combinado) o candidato terá extamente 24 horas para realizar o commit final.
       6.1) Caso o candidato realize somente um commit após o prazo estipulado (24hrs), o valor do teste será reduzido a metade.
    6) o candidato poderá criar/utilizar uma base de dados pessoal ou da internet para demonstrar os conhecimentos em SQL Server.
    7) A nota somente terá valor integral caso o avaliado explique todos os passos realizados durante a entrevista que ocorrerá após a execução da avaliação.
    
Crie um README com orientações para a instalação do sistema.


#Plus ++
Cubra pelo menos 3 recursos de seu código com testes unitários.
Utilize as melhores práticas da Orientação a Objetos.
As tabelas do banco de dados criadas através de migrations.
Pretendemos conectar um aplicativo mobile nesta nova plataforma.
Observações:
Será avaliado é a qualidade do código não a velocidade de desenvolvimento.
Se não for possível terminar todas as funcionalidades, não tem problema.

Você pode optar por templates para o frontend.

Não precisa ser complexo, com varias lib’s e etc. O legal é usar o necessário para ter um código de qualidade e de fácil evolução.

Lembrando código de qualidade, você pode e deve fazer o que achar necessário para isso, mesmo que não esteja listado aqui.

#Links para ajuda

Docker - Ambiente APACHE + PHP X: https://hub.docker.com/_/php
SQL Server Execute Online -  https://www.jdoodle.com/execute-sql-online/

#Em caso de dúvidas, envie-nos um e-mail para rodolforomao@gmail.com
>>>>>>> a93bdddfd175ba4dacdc937638aaafbbb4566114
