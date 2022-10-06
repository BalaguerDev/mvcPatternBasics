<?php

    class CarsModel extends Model{

        function get(){

            $query = $this -> db -> connect()->prepare("SELECT c.id, c.brand, c.model, c.color, c.price
            FROM cars c
            ORDER BY c.id ASC;");

            try{

                $query -> execute();
                $cars = $query -> fetchAll();
                return $cars;
            
            } catch (PDOException $c){
                return[];
            }
        }



        function getById($id){
            $query = $this -> db -> connect()->prepare("SELECT c.id, c.brand, c.model, c.color, c.price
            FROM cars c
            WHERE id = $id;");

            try {
                $query->execute();
                $cars = $query->fetch();
                return $cars;
            } catch (PDOException $c) {
                return [];
            }
        }



        function update($cars){
            $query = $this->db->connect()->prepare("UPDATE cars c
            SET name = ?, id = ?, brand = ?, model = ?, color = ?, price = ? 
            WHERE id = ?;");

            $query->bindParam(1, $cars["id"]);
            $query->bindParam(1, $cars["brand"]);
            $query->bindParam(2, $cars["model"]);
            $query->bindParam(3, $cars["color"]);
            $query->bindParam(4, $cars["price"]);


            try {
                $query->execute();
                return [true];
            } catch (PDOException $c) {
                return [false, $c];
            }
        }

        
    }
    



?>