<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Dashboard/Home'] = 'DashboardAdmin/HomeControllerAdmin';
$route['Dashboard/Professores'] = 'DashboardAdmin/ProfessoresHomeController';
$route['Dashboard/Alunos'] = 'DashboardAdmin/AlunosHomeController';
$route['Dashboard/Alunos/NovoAluno'] = 'DashboardAdmin/AlunosHomeController/NovoAluno';
$route['Dashboard/Professores/NovoProfessor'] = 'DashboardAdmin/ProfessoresHomeController/NovoProfessor';
$route['Dashboard/Conteudos'] = 'DashboardAdmin/ConteudosControllerAdmin';
$route['Dashboard/Conteudos/NovoConteudo'] = 'DashboardAdmin/ConteudosControllerAdmin/NovoConteudo';
$route['Dashboard/Conteudos/DownloadConteudo/(:any)'] = 'DashboardAdmin/ConteudosControllerAdmin/DownloadConteudo';
$route['Api/Conteudos/GetConteudoForProfessorId/(:any)'] = 'Api/ApiControllerConteudo/GetConteudoProfessorId';

$route['Login/ValidandoUsuario'] = 'Login/ValidandoLogin';
