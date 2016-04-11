<?php


class ContactsController extends Controller{

    public function __construct($data = array() )
    {
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index(){
<<<<<<< HEAD
=======

>>>>>>> 3bfe73c050ac6cd9e40f3501da855beaab429623
        if($_POST){
            if($this->model->save($_POST)){
                Session::setFlash('Спасибо! Ваше сообщение отправлено!');
            }
<<<<<<< HEAD

        }
        $this->data = $this->model->getList();
       // if($_POST || empty($_POST)){
       //     Session::setFlash('Поле не должно быть пустым.Введите Ваше сообщение!');   }
    }

    public function admin_index(){
        $this->data = $this->model->getList();
    }

    public function admin_answer(){
        $params = App::getRouter()->getParams();

        if (isset($params[0])) {
            $id = strtolower($params[0]);
            $this->data['contact'] = $this->model->getByName($id);
        }
    }

    public function admin_delete(){
        if ( isset($this->params[0])){
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                Session::setFlash('Сообщение удалено!');
            }else{
                Session::setFlash('Ошибка!');
            }
        }
        Router::redirect('/admin/contacts/');
    }
=======
        }

    }

    public function admin_index(){
    $this->data = $this->model->getList();
    }



>>>>>>> 3bfe73c050ac6cd9e40f3501da855beaab429623

}
