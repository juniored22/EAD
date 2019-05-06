<?php

$router = [
  '/'      => 'shop',
  '/admin' => 'login',
  '/login' => 'userLogin',
  '/cursos' => 'cursos',
  '/curso' => 'curso',
  '/category' => 'category',
  '/admin/category/create' => 'category',
  '/admin/home' => 'homeAdmin',
  '/admin/courses' => 'listCourseAdmin',
  '/admin/category' => 'listCategoryAdmin',
  '/admin/create' => 'create',
  '/logout' => 'logout'
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(!array_key_exists($uri, $router))
{
  header("location:/error-404");
  throw new Exception("Rota  {$uri} não exite");
}

return $router[$uri];

?>
