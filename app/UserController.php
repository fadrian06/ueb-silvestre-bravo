<?php 
include "./../modelos/Db.php";
//creamos una nueva clase que hereda atributos de otra clase llamada Database
class User extends Connection{
    
    //Creamos una funcion que en este caso va a obtener un parametro que es el usuario y la clave
            public function getUser($username, $password){
                
                //se crea una consulta con SELECT * FROM, que me permitira verificar si en la bbdd se encuentra la informacion segun el parametro establecido
                $sql = "SELECT * FROM seguridad WHERE Usuario = '$username' AND Clave ='$password'";
    //se crea una variable $result que permite hacer la conexion con la bbdd y ejecutar la consulta $sql de la linea anterior
                $result = $this->conexion()->query($sql);

    //la linea siguiente nos arroja el numero de filas segun la consulta realizada que este caso solo es 1
                $numRows = $result->rowCount();
                //print_r($result->num_rows);
                
                if($numRows > 0){
                    
                    $datos_usuario = $result->fetch();
                    
                    $rol2 = $datos_usuario["Privilegio"];
                   //echo $rol2;
                    
                    
                  if ($rol2=="A") {
                     header('Location: /sistema/home_admin.php');
                 
                 } else if ($rol2=="U") {
                    header('Location: welcome2.php');
                  }
                
                 return $rol2; 
                } 
              return false;   
            }
    
}        
//verificamos que exista el submit y guardamos los valores del formulario en variables
    
        $username = $_POST['usuario'];

        $password = $_POST['password'];
        
//comprobamos que los campos usuario y clave no este vacio
        if(empty($username) || empty($password)){
            echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
        }else{
            $user = new User;

            if($user->getUser($username,$password)){
               session_start();
                $_SESSION['usuario'] = $username;
               //header('Location: welcome.php');

            }else {
                
             echo '<div class="alert alert-danger">Usuario no existe</div>';
            }
        } 
  ?>   
