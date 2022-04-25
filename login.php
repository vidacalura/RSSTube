<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" type="text/css" href="./CSS/output.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/de94e301a2.js" crossorigin="anonymous"></script>
        <title> RSSTube - Login </title>

    </head>


    <body class="bg-gray-500 text-white">
        
        <nav class="navbar">
            <!-- Menu de navegação -->
            <div>
                <!-- Logo -->
                <h1 class="p-5 pl-6 font-bold text-white"> <a href="index.html#"> RSSTube </a> </h1>
            </div>
            
            <div class="justify-end">
                <ul class="p-5 flex">
                    <li> <a href="sobre.html#"> Sobre </a> </li>
                    <li class="active"> <a href="login.php#"> Log in </a> </li>
                    <li> <a href="cad.php#"> Cadastro </a> </li>
                </ul>
            </div>
        </nav>

        <main class="pt-32">

            <form action="POST" action="index.html" class="p-8 pt-10 w-96 text-center bg-gray-200 text-black cad-div rounded-md shadow-md">

                <input type="text" name="email" placeholder="Email:" class="txtbox"> <br>

                <input type="password" name="senha" placeholder="Senha:" class="txtbox"> <br>

                <p class="text-white"> 
                    <a href="recsenha.php" class="underline mr-1"> Esqueceu sua senha? </a> 
                    | 
                    <a href="cad.html" class="underline ml-1"> Não tem uma conta? </a> 
                </p>

                <input type="submit" value="Entrar" class="text-white mt-8 bg-gray-400 p-2 px-3 rounded-full shadow-md hover:shadow-md hover:opacity-80 transition ease-in-out">

            </form>

        </main>

    </body>

</html>

<!-- niconico, spotify, youtube, odysee -->