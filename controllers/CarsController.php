<?php

    class CarsController{
        use Controller;

        //method controller



        function getAllCars(){
            $cars = $this ->model ->get();
            
            if(isset($cars)){
                $this -> view -> data = $cars;
                $this -> view -> render ("cars/carsDashboard");
            }
        }



        function getCars($request){
            $cars = null;

            if(isset($request["id"])){
                $cars = $this -> model -> getById($request["id"]);
            }

            $this -> view -> action = $request["action"];
            $this -> view -> data = $cars;
            $this -> view -> render("cars/cars");
        }



        function updateCars($request)
        {
            if (sizeof($_POST) > 0) {
                $cars = $this->model->update($_POST);
    
                if ($cars[0]) {
                    header("Location: index.php?controller=Cars&action=getAllCars");
                } else {
                    $this->action = $request["action"];
                    $this->error = "There is already a car with these characteristics.";
                    $this->view->render("cars/cars");
                }
            } else {
                $this->view->render("cars/cars");
            }
        }
    
        function deleteCars($request)
        {
            $action = $request["action"];
            $cars = null;
            if (isset($request["id"])) {
                $cars = $this->model->delete($request["id"]);
                header("Location: index.php?controller=Cars&action=getAllCars");
            }
        }
    }
    

?>