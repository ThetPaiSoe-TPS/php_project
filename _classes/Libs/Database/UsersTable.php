<?php
    namespace Libs\Database;
    use PDOException; //shows DB connection error issue
    class UsersTable{
        private $db;
        public function __construct(MySQL $mysql)// __construct to call private $db inner fucntion
        {
            $this->db= $mysql->connect();// connect DB using connect() funciton
        }
        public function find($email, $password){// if email and password is exit in DB or not
            try{
                $statement= $this->db->prepare("select * from users where email=:email and password=:password");
                $statement->execute(['email'=>$email, 'password'=> $password]);
                $user= $statement->fetch();
                return $user;
            }
            catch(PDOException $e){
                echo $e->getMessage();
                exit();
            }
        }
        public function insert($data){
            try{
                $statement= $this->db->prepare(
                    "insert into users (name, email, phone, address,
                    password, created_at) values (:name, :email, :phone, :address, :password, NOW())"
                );
                $statement->execute($data);
                return $this->db->lastInsertId();
            }
            catch(PDOException $e){
                echo $e->getMessage();
                exit();
            }
        } 

        public function updatePhoto($id, $photo){
            $statement= $this->db->prepare("update users set photo=:photo where id=:id");
            $statement->execute(['id'=> $id, 'photo'=> $photo]);

            return $statement->rowCount();
        }
    }