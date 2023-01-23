<?php 
    $cookie_name1 ="num";
    $cookie_valor1="";
    $cookie_name2 ="op";
    $cookie_valor2="";

    if(isset($_POST['num']))
    {
        $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_valor1=$_POST['input'];
        setcookie($cookie_name1, $cookie_valor1, time()+(86400 * 30), "/");

        $cookie_valor2=$_POST['op'];
        setcookie($cookie_name2, $cookie_valor2, time()+(86400 * 30), "/");
        $num="";


    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {

            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;

        }

        $num=$result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>

        body{
            background-color: blanchedalmond;
        }

        .maininput{
            font-size: 80px;
            color: antiquewhite;
            font-weight: 400;
        }

        .calcu{
            margin: auto;
            background-color: black;
            border: 2px solid whitesmoke;
            width: 26%;
            height: 610px;
            border-radius: 10px;
            box-shadow: 10px 10px 40px;

        }
        
        .maininput{
            background-color: black ;
            border: 1px solid grey;
            height: 110px;
            width: 98%;
        }

        .numeroBtn{
            padding: 30px 35px;
            border-radius: 50%;
            font-size: x-large;
            font-weight: 600;

        }

        .numeroBtn:hover{
            background-color: rgb(209, 230, 241);
            color: blue;
        }


        .signoBtn{
            padding: 30px 35px;
            border-radius: 10%;
            font-size: x-large;
            background-color: rgb(128, 217, 250);
        }

        .signoBtn:hover{
            background-color: aqua ;
        }

        .c{
            padding: 30px 35px;
            border-radius: 50%;
            font-size: x-large;
            background-color: red;
        }

        .c:hover{
            background-color: red ;
            color: whitesmoke;
        }

        .equal{
            padding: 30px 35px;
            border-radius: 10%;
            font-size: x-large;
            background-color: rgb(235, 79, 79);
        }

        .equal:hover{
            background-color: brown;
        }

    </style>
</head>
<body>

    <div class="calcu">
        <form action="" method="post" >
            <br>
            <!-- mostrar el resultado -->
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>" > <br> <br>

            <!-- primera fila del 7,8,9,+ -->
            <input type="submit" class="numeroBtn" name="num" value="7" >
            <input type="submit" class="numeroBtn" name="num" value="8" >
            <input type="submit" class="numeroBtn" name="num" value="9" >
            <input type="submit" class="signoBtn" name="op" value="+" > <br> <br>

            <!-- segunda fila -->
            <input type="submit" class="numeroBtn" name="num" value="4" >
            <input type="submit" class="numeroBtn" name="num" value="5" >
            <input type="submit" class="numeroBtn" name="num" value="6" >
            <input type="submit" class="signoBtn" name="op" value="-" > <br> <br>

            <!-- tercera fila -->
            <input type="submit" class="numeroBtn" name="num" value="1" >
            <input type="submit" class="numeroBtn" name="num" value="2" >
            <input type="submit" class="numeroBtn" name="num" value="3" >
            <input type="submit" class="signoBtn" name="op" value="*" > <br> <br>

            <!-- última fila para el igual, cer, punto -->
            <input type="submit" class="c" name="num" value="c" >
            <input type="submit" class="numeroBtn" name="num" value="0" >
            <input type="submit" class="equal" name="equal" value="=" >
            <input type="submit" class="signoBtn" name="op" value="/" >
        </form>
    </div>


     <!-- inicio del footer -->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.es%2Ffotos-vectores-gratis%2Fcalculadora-teclado&psig=AOvVaw3vHwloOtMJafPo5noYPbTf&ust=1674525756800000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCNDfstnM3PwCFQAAAAAdAAAAABAE" alt="Logo de SLee Dw" height="50px" width="70 px">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>EQUIPO</h2>
                <p>Proyecto Calculadora - CBSPAT</p>
                <p>Latacunga - Ecuador</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://chrome.google.com/webstore/detail/calculator/joodangkbfjnajiiifokapkpmhfnpleo?hl=es" class="fa fa-facebook"></a>
                    <a href="https://chrome.google.com/webstore/detail/calculator/joodangkbfjnajiiifokapkpmhfnpleo?hl=es" class="fa fa-instagram"></a>
                    <a href="https://chrome.google.com/webstore/detail/calculator/joodangkbfjnajiiifokapkpmhfnpleo?hl=es" class="fa fa-twitter"></a>
                    <a href="https://chrome.google.com/webstore/detail/calculator/joodangkbfjnajiiifokapkpmhfnpleo?hl=es" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>GRUPO CALCULCADORA</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <!-- fin del footer -->


</body>



</html>