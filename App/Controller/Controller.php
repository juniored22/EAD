<?php
namespace Controller;

use Database\Schema;
use Database\Session;
use Model\ModelProduct;
use Model\AuthModel;
use Model\ModelCategory;
use Model\ModelShowCourseAdmin;
use Model\ModelShowCategoryAdmin;
use Model\ModelUpload;
use View\ShowCourseAdminView;
use View\ShowCategoryAdminView;
use View\AddCategoryView;
use View\CourseAdminView;
use View\HomeAdmin;
use View\HomeView;
use View\CursosView;
use View\ListCursoView;
use View\LoginView;

/**
*
*/
class Controller
{


/*
|--------------------------------------------------------------------------
| Home site
|--------------------------------------------------------------------------

*/
  public function shop()
  {
    $data = (new ModelShowCategoryAdmin)->list();
    return (new HomeView($data));
  }


/*
|--------------------------------------------------------------------------
|Auth admin
|--------------------------------------------------------------------------
*/
  public function login($value='')
  {
    if(isset($_POST['username'])) {
      $result = (new AuthModel)->admin($_POST);

      if ($result != array()) {
        $_SESSION['auth'] = "admin";
        header('Location: /admin/home');
      }
    };
    (new LoginView);
  }


  /*
  |--------------------------------------------------------------------------
  |Auth user
  |--------------------------------------------------------------------------
  */
    public function userLogin($value='')
    {
      if(isset($_POST['username'])) {
        $result = (new AuthModel)->user($_POST);

        if ($result != array()) {
          $_SESSION['auth'] = "user";
          $_SESSION['name'] = $_POST['username'];
          header('Location: /');
        }
      };
      (new LoginView);
    }

/*
|--------------------------------------------------------------------------
| Listar cursos
|--------------------------------------------------------------------------
*/
  public function cursos($value='')
  {
    (new Session)->user();
    $data = (new ModelShowCourseAdmin)->list($_GET['id']);
    return (new ListCursoView($data));
  }


/*
|--------------------------------------------------------------------------
| Show curso
|--------------------------------------------------------------------------
*/

  public function curso($value='')
  {
    if ($_GET['id']) {
      $data = (new ModelProduct)->selectCourse($_GET['id']);
    }

    return (new CursosView($data));
  }

/*
|--------------------------------------------------------------------------
| Home admin
|--------------------------------------------------------------------------

*/

  public function homeAdmin($value='')
  {
    (new Session)->admin();
    (new HomeAdmin);
  }

  /*
  |--------------------------------------------------------------------------
  | Show course admin and delete e edit course
  |--------------------------------------------------------------------------

  */

    public function listCourseAdmin($value='')
    {
      (new Session)->admin();
      if ($_GET['action'] == 'deletar') {
        (new ModelProduct)->deleteCourse($_GET['codigo']);
      }
      $result = (new ModelShowCourseAdmin)->list($_GET['id']);
      (new ShowCourseAdminView($result));
    }


    /*
    |--------------------------------------------------------------------------
    | Show category admin and delete e edit course
    |--------------------------------------------------------------------------

    */

      public function listCategoryAdmin($value='')
      {
        (new Session)->admin();
        if ($_GET['action'] == 'deletar') {
          (new ModelCategory)->deleteCategory($_GET['codigo']);
        }
        $result = (new ModelShowCategoryAdmin)->list();
        (new ShowCategoryAdminView($result));
      }



    /*
    |--------------------------------------------------------------------------
    | Create category
    |--------------------------------------------------------------------------
    */
      public function category($value='')
      {
        (new Session)->admin();
        if(isset($_POST['title'])) {
            $result = (new ModelCategory)->createCategory($_POST,$_FILES['img']['name']);
            $resultFile = (new ModelUpload($_FILES));
        }
        (new AddCategoryView);
      }



    /*
    |--------------------------------------------------------------------------
    | Create acourse admin
    |--------------------------------------------------------------------------

    */

      public function create($value='')
      {
        (new Session)->admin();
        if(isset($_POST['title'])) {
            $result = (new ModelProduct)->createCourse($_POST);
        }
        echo "<p style='text-center'>{$result}</p>";
        (new CourseAdminView);
      }

      /*
      |--------------------------------------------------------------------------
      | Logout
      |--------------------------------------------------------------------------

      */

        public function logout($value='')
        {
          $_SESSION['auth'] = '';
          $_SESSION['name'] = '';
          header('Location: /');
        }
}
