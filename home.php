<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Dashboard</title>
</head>

<body class="bg-gray-200 w-full flex-col text-white">
    <!--Navigation bar-->
    <nav class="flex-col bg-gray-900">
        <div class="w-full h-24 flex items-center">
            <div class="justify-start flex">
                <img src="./img/Letlotlo_Logo.png" class="mx-4 w-20 h-20">
            </div>

            <div class="flex justify-center w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 rounded-tl rounded-bl bg-white flex text-black font-bold" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

                <input type="search" name="search" id="search" class=" h-10 w-96 border p-2 rounded-tr rounded-br" placeholder="search">
            </div>
            <div class="flex mr-4">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>

                </div>
                <div class="mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 w-full mx-4">
            <div class="mt-4 my-1 w-auto md:w-1/2 flex justify-between">
                <a href="#" class="hover:bg-blue-950 rounded-md p-2">Home</a>
                <a href="./loans.php" class="hover:bg-blue-950 rounded-md p-2">Loans</a>
                <a href="./payments.php" class="hover:bg-blue-950 rounded-md p-2">Payments</a>
                <a href="./borrowers.php" class="hover:bg-blue-950 rounded-md p-2">Borrowers</a>
                <a href="./LoanPlans.php" class="hover:bg-blue-950 rounded-md p-2">Loan Plans</a>
                <a href="./LoanTypes.php" class="hover:bg-blue-950 rounded-md p-2">Loan Types</a>
                <a href="./users.php" class="hover:bg-blue-950 rounded-md p-2">Users</a>
            </div>
        </div>
    </nav>
    <!--Body-->
    <!--Dashboard label-->
    <div class="bg-blue-950 flex mx-1 rounded justify-center font-bold h-12 items-center">Dashboard</div>
    <div class="">
        <div class="grid grid-cols-2 md:grid-cols-4 mx-1 my-2 text-white gap-x-4 gap-y-1 text-lg grid-rows-2">
            <div class="rounded md justify-center items-center font-bold flex bg-blue-600">2 Borrowers</div>
            <div class="rounded md justify-center items-center font-bold flex bg-green-600">0.0 Payments Today</div>
            <div class="rounded md justify-center items-center font-bold flex bg-orange-600">2 Active Loans</div>
            <div class="rounded md justify-center items-center font-bold flex bg-red-600">1 Pending Loans</div>
            <a href="#" class="rounded md justify-center items-center text-blue-500 flex border border-blue-500">View Borrowers</a>
            <a href="#" class="rounded md justify-center items-center text-green-500 flex border border-green-500">View Payments</a>
            <a href="./loans.php" class="rounded md justify-center items-center text-orange-500 flex border border-orange-500">View Loans</a>
            <a href="#" class="rounded md justify-center items-center text-red-500 flex border border-red-500 p-2">View Pending Loans</a>
        </div>
    </div>

    <footer class="flex justify-center text-black absolute bottom-0 inset-x-0">&copy;Copyright 2023 Letlotlo Loans</footer>

</body>

</html>