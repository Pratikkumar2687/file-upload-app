@extends('layouts.app')

@section('content')

    <body class="bg-gray-50 dark:bg-gray-900 flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 text-center max-w-md mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Welcome to File Upload System</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                If you want to upload a file, please click the button below to go to the upload page.
            </p>

            <a href="{{ route('file.upload') }}"
                class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">
                Go to Upload Page
            </a>
        </div>
    </body>
@endsection