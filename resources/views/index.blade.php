<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-pro h-screen flex justify-center items-center  font-yekan">

<div class="w-[500px] flex justify-center items-start flex-col gap-6">

<div class="flex justify-center items-center gap-4">
    <a href="{{ route('crud.create') }}" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-yekan"> ایجاد اطلاعات  </a>
    <a href="{{ route('crud.export') }}" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-yekan">  خروجی چاپ  </a>
</div>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        نام
                    </th>
                    <th scope="col" class="px-2 py-3 ">
                       نام خانوادگی
                    </th>
                    <th scope="col" class="px-2 py-3">
                        شماره موبایل
                    </th>
                    <th scope="col" class="px-6 py-3">
                        آدرس
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                      عملیات
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cruds as $crud )


                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $crud->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $crud->lastname }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $crud->cellphone }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $crud->address }}
                    </td>
                    <td class="px-6 py-4 text-right flex gap-4">
                        <a href="{{ route('crud.edit' , ['crud' => $crud->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ویرایش</a>
                        <form action="{{ route('crud.destroy' , ['crud' => $crud->id]) }}" method="POST" class="font-medium text-red-600  hover:underline">
                         @method('DELETE')
                         @csrf
                               <button class="cursor-pointer">حذف</button>



                        </form>
                    </td>
                </tr>


                @endforeach
            </tbody>
        </table>
    </div>


</div>


</body>
</html>
