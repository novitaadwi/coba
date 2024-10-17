@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="w-full max-w-4xl bg-gray-900 p-8 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-4xl font-semibold text-center text-white mb-8">Contact List</h2>
            <table class="min-w-full table-auto bg-gray-800 text-gray-400 rounded-lg">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-300 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-300 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-300 uppercase">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $contacts = [
                            ['name' => 'Mark Lee', 'email' => 'mark@example.com', 'role' => 'Mahasiswa'],
                            ['name' => 'Lee Haechan', 'email' => 'haechan@example.com', 'role' => 'Mahasiswa'],
                            ['name' => 'Johnny Suh', 'email' => 'john@example.com', 'role' => 'Mahasiswa'],
                            ['name' => 'Jeong Jaehyun', 'email' => 'jae@example.com', 'role' => 'Karyawan'],
                            ['name' => 'Kim Doyoung', 'email' => 'doy@example.com', 'role' => 'Dosen']
                        ];
                    @endphp
                    @foreach($contacts as $contact)
                        <tr class="hover:bg-gray-700">
                            <td class="px-6 py-4">{{ $contact['name'] }}</td>
                            <td class="px-6 py-4">{{ $contact['email'] }}</td>
                            <td class="px-6 py-4">{{ $contact['role'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
