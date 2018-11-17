
<?php
     class logic extends config{

        public function register($fname, $lname, $mob, $message, $email, $password){

            try{
                  $db = $this->getconnection();
                  $stmt = $db->prepare("INSERT INTO stud(fname,lname,mob,message,email,password)VALUES(:fname,:lname,:mob,:message,:email,:password)");
                  $stmt->bindParam(':fname',$fname, PDO::PARAM_STR);
                  $stmt->bindParam(':lname',$lname, PDO::PARAM_STR);
                  $stmt->bindParam(':mob',$mob, PDO::PARAM_STR);
                  $stmt->bindParam(':message',$message, PDO::PARAM_STR);
                  $stmt->bindParam(':email',$email, PDO::PARAM_STR);
                  $password_hash = password_hash($password, PASSWORD_DEFAULT);
                  $stmt->bindParam(':password',$password_hash, PDO::PARAM_STR);
                  $stmt->execute();

            }catch(PDOEXCEPTION $e){
                  exit($e->getMessage());
            }
        }
       public function Login($email,$password){
             
            try{
                $db = $this->getconnection();
                  $stmt = $db->prepare("SELECT * FROM stud WHERE  email=:email");
                  $stmt->bindParam(':email',$email, PDO::PARAM_STR);
                  $stmt->execute();
                  $row = $stmt->fetch(PDO::FETCH_ASSOC); 

                    if($row != null){     
                             if(password_verify($password, $row["password"])){
                                   
                                $_SESSION['user_id'] = $row["fname"];
                              
                                 header("Location: home.php");
                         }
                         else{
                              
                             echo "password not matching";
                         }
                         
                        }
                        else{
                               echo "Email Not Found";
                        }
                    
                     
            }catch(PDOEXCEPTION $e){
                 exit($e->getMessage());
                 
            }
        }
        public function user(){
            $db = $this->getconnection();
             $stmt = $db->query("SELECT * FROM stud");
             while($row = $stmt->fetch(PDO::FETCH_OBJ)){     
                 echo   '<h6 class="text text-center text text-success">'. $row->fname.'</h6>';
             }
        }
        
            
        


     }
?>