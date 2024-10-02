<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <head>
    <style>
        input:-webkit-autofill, 
input:-webkit-autofill:hover,  
input:-webkit-autofill:focus,
input:-webkit-autofill:visited, 
input:-webkit-autofill:link, 
input:-webkit-autofill:active  { 
    transition: background-color 5000s ease-in-out 0s; 
    -webkit-text-fill-color: #5a318d !important;
    -webkit-font-size: 1rem !important;
    font-size: 1rem !important;
  }
  .mt-4{
    font-size: 1rem !important;
  }
  main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
.main__search form {
  width: auto;
  float: right;
  margin-top: 30px;
  border-radius: 42px;
}
.main__search input {
    display: flex;
    align-items: center;
    flex-direction: row;
    width: 740px;
    padding-left: 15px;
    border: 0px;
    color: #5a318d;
    outline: none;
}
.form__main__search{
    display: flex;
    width: 800px;
  height: 42px;
  padding-left: 15px;
  border: 2px solid #5a318d;
  background: white;
  color: #5a318d;
  outline: none;
  position: relative;
}
.main__search button {
}
a:hover{
    color: #701ADB;
}
header{
    background-color: #5a318d;
  }
  ::placeholder { color: #5a318d; }
  ::-webkit-input-placeholder{
    color: #5a318d;
  }
  ::-ms-input-placeholder{
    color: #5a318d;
  }
    </style>
</head>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
