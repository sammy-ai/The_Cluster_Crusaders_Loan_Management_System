<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Payments</title>
</head>

<body class="bg-gray-200 w-full flex-col text-white">
    <!--Navigation bar-->
    <nav class="flex-col bg-gray-900">
        <div class="w-full h-24 flex items-center">
            <div class="justify-start flex">
                <img src="./img/Letlotlo_Logo.png" class="mx-4 w-20 h-20">
            </div>

            <div class="flex justify-center w-full">
                <span class="font-black text-3xl">Payments</span>
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
                <a href="./home.php" class="hover:bg-blue-950 rounded-md p-2">Home</a>
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
    <div class="flex-col">
        <div class="flex w-full justify-center">
            <div class="rounded mx-4 flex bg-gray-400 w-5/6">
                <div class="flex w-1/3 justify-start text-gray-600 font-bold m-2">Payment List</div>
                <div class="w-2/3 flex justify-end m-2">
                    <button class="justify-end bg-blue-700 p-2 rounded">+ New Application</button>
                </div>
            </div>
        </div>

        <div class="flex w-full justify-center text-gray-950 font-medium">
            <div class="border-t w-5/6 flex justify-end my-2 p-2 border-gray-400">
                <div class="">
                    <label for="search">Search</label>
                    <input type="search" name="" id="" placeholder="search payments" class="p-2 font-normal rounded">
                </div>
            </div>
        </div>

        <div class="mx-2 flex w-full justify-center text-gray-950">
            <table class="table-auto border-seperate border-spacing-2 border border-gray-700 rounded w-5/6">
                <thead>
                    <tr>
                        <th class="">Payment ID</th>
                        <th class="">Loan Reference Number</th>
                        <th class="">Borrower</th>
                        <th class="">Amount</th>
                        <th class="">Penalty</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="flex justify-center text-black absolute bottom-0 inset-x-0">&copy;Copyright 2023 Letlotlo Loans</footer>

</body>

</html>