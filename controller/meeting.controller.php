<?php
require_once 'model/meeting.php';

class MeetingController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Meeting();
    }
    
    public function Index(){
        require_once 'view/meeting/meeting.php';
    }

    public function home(){
        require_once 'view/home.php';
    }
    public function deletemeeting(){
        require_once 'view/deletemeeting.php';
    }
    
    public function Crud(){
        $alm = new Meeting();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/meeting/meeting-edit.php';
    }
    
    public function Guardar(){
        $alm = new Meeting();
        
        $alm->id = $_REQUEST['id'];
        $alm->first_name = $_REQUEST['first_name'];
        $alm->last_name = $_REQUEST['last_name'];
        $alm->email = $_REQUEST['email'];
        $alm->phone_number = $_REQUEST['phone_number'];
        $alm->topic = $_REQUEST['topic'];
        $alm->date = $_REQUEST['date'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }

    
}