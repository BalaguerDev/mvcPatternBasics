<?php

    class MotosController{

        use Controller;

        //method controller




        function getAllMotos() {
            $motos = $this -> model -> get();

            if(isset($motos)) {
                $this -> view -> data = $motos;
                $this -> view -> render ("motos/motosDashboard");

        }
    }




    function getMotos($request) {
        $motos = null;

        if (isset($request["id"])) {
            $motos = $this -> model -> getById($request["id"]);
        }

        $this->view -> action = $request["action"];
        $this->view -> data = $motos;
        $this->view -> render("motos/motos");
    }



    function createMotos($request)
    {
        if (sizeof($_POST) > 0) {
            $motos = $this -> model -> create($_POST);

            if ($motos[0]) {
                header("Location: index.php?controller=Motos&action=getAllMotos");
            } else {
                echo $motos[1];
            }
        } else {
            $this->view -> action = $request["action"];
            $this->view -> render("motos/motos");
        }
    }



    function updateMotos($request)
    {
        if (sizeof($_POST) > 0) {
            $motos = $this-> model -> update($_POST);

            if ($motos[0]) {
                header("Location: index.php?controller=Motos&action=getAllMotos");
            } else {
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other motos with that email.";
                $this->view->render("motos/motos");
            }
        } else {
            $this->view->render("motos/motos");
        }
    }




    function deleteMotos($request)
    {
        $action = $request["action"];
        $motos = null;
        if (isset($request["id"])) {
            $motos = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Motos&action=getAllMotos");
        }
    }
}

?>