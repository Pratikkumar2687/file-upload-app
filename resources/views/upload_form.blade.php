@extends('layouts.app')

@section('content')
    {{-- Upload Form Card --}}
    <div class="max-w-3xl mx-auto mt-10">
        <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">
            <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 text-center">Upload a File</h2>

            <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                    <label for="file" class="flex-1">
                        <input type="file" name="file" id="file" class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4
                                                   file:rounded-md file:border-0
                                                   file:text-sm file:font-semibold
                                                   file:bg-blue-50 file:text-blue-700
                                                   hover:file:bg-blue-100
                                                   focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </label>

                    <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-blue-600 text-white font-medium rounded-md
                                               hover:bg-blue-700 transition duration-200">
                        Upload
                    </button>
                </div>

                @if(session('success'))
                    <div class="text-green-600 text-sm text-center">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    {{-- Uploaded Files Table Card --}}
    <div class="max-w-7xl mx-auto mt-10">
        <div class="bg-white rounded-lg shadow-lg p-6 overflow-x-auto">
            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-6 text-center">Uploaded Files</h3>

            <table class="min-w-full table-auto border border-gray-300 text-sm sm:text-base">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="px-4 py-2 text-left border border-gray-300 whitespace-nowrap">File Name</th>
                        <th class="px-4 py-2 text-left border border-gray-300 whitespace-nowrap">File Type</th>
                        <th class="px-4 py-2 text-left border border-gray-300 whitespace-nowrap">Uploaded At</th>
                        <th class="px-4 py-2 text-left border border-gray-300 whitespace-nowrap">Download</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($files as $file)
                        <tr class="text-gray-600 hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300 break-words">{{ $file->filename }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ pathinfo($file->filename, PATHINFO_EXTENSION) }}
                            </td>
                            <td class="px-4 py-2 border border-gray-300">{{ $file->created_at->format('d M Y, h:i A') }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('file.download', $file->id) }}" target="_blank"
                                    class="text-blue-600 hover:underline">
                                    Download
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-4 text-center text-gray-500 border border-gray-300">
                                No files uploaded yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection