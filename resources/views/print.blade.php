<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>export</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>




<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Firstname
                </th>
                <th scope="col" class="px-6 py-3">
                  Lastname
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Cellphone
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $crud)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $crud->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $crud->lastname }}
                </td>
                <td class="px-6 py-4">
                   {{$crud->address}}
                </td>
                <td class="px-6 py-4">
                   {{$crud->cellphone}}
                </td>

            </tr>



@endforeach
        </tbody>
    </table>
</div>






</body>
</html>
