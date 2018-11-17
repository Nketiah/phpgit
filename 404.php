<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
           <form id="reg">
        First Name: <input id="first" name="firstname" type="text"><br>
        Last Name: <input id="last" name="lastname" type="text"><br>
    <button type="button" name="submit" id="btn" class="btn_click">Click</button>
       </form>

    <script>
          
          let joe = document.getElementById("btn");

          function validate(){
          let fn = document.getElementById("first").value;
          let ln = document.getElementById("last").value;
          let joe = document.getElementById("btn");
           if(fn =="" || ln ==""){  
           alert("Oops! try again");
            return false;
          }
          else {
              alert("return true");
          }

        }
       //document.getElementsByClassName
        //let joe = document.getElementByClassName("btn_click");
       joe.addEventListener('click',validate);
          
      
    </script>
</body>
</html>