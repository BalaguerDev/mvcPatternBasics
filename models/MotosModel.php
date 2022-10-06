<?php

    class MotosModel extends Model{

        function get(){

            $query = $this -> db -> connect() -> prepare("SELECT m.id, m.brand, m.model, m.type, m.cc, m.price
            FROM motos m
            ORDER BY m.id ASC;");

            try{

                $query -> execute();
                $motos = $query -> fetchAll();
                return $motos;
            
            } catch (PDOException $m){
                return[];
            }
        }



        function getById($id){
            $query = $this -> db -> connect() -> prepare("SELECT m.id, m.brand, m.model, m.type, m.cc, m.price 
            FROM motos m
            WHERE id = $id;");

            try {
                $query->execute();
                $employee = $query->fetch();
                return $employee;
            } catch (PDOException $m) {
                return [];
            }
        }



    }
    



?>