<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Loan Management Login</title>
</head>

<body class="bg-gray-200 flex-col text-white">
    <!--Navigation bar-->
    <nav class="bg-gray-900 w-full h-24 flex items-center">
        <div class="justify-start flex">
            <img src="./img/Letlotlo_Logo.png" class="mx-4 w-20 h-20">
        </div>

        <div class="flex justify-center w-full text-lg font-extrabold">Letlotlo Loans</div>
    </nav>
    <!--Body-->
    <form action="" method="post" class="mt-16 w-full flex justify-center">
        <div class="flex-col w-1/4 text-gray-900"></div>
            <div class="flex justify-center border border-rounded">
                <img src="./img/human.png" alt="">
            </div>
            <div class="font-bold m-4">
                <label for="username" class="">Username</label>
                <input type="text" name="username" id="username" placeholder="provide username" class="h-8 rounded font-normal p-2">
            </div>
            <div class="font-bold m-4">
                <label for="username" class="">Password</label>
                <input type="password" name="password" id="password" placeholder="provide password" class="h-8 rounded font-normal p-2">
            </div>
            <div class="mx-16 my-4 text-lg flex">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="mx-2">Remember Password</label>
            </div>
            <div class="flex w-full justify-center">
                <a href="./home.php" class="bg-blue-900 border-0 rounded h-8 w-32 p-2 justify-center text-white font-semibold flex items-center hover:text-gray-600 hover:lg:bg-blue-950">Login</a>
            </div>
            <a href="#" class="flex justify-center text-blue-700 m-4">Forgot password?</a>
        </div>
    </form>

    <footer class="flex justify-center text-black absolute bottom-0 inset-x-0">&copy;Copyright 2023 Letlotlo Loans</footer>

</body>

</html>