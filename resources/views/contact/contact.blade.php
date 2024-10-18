@extends('layouts.app')

@section('title', 'Halaman Kontak')

@section('content')
<div class="w-full bg-gradient-to-r from-pink-200 to-pink-300 dark:from-pink-600 dark:to-pink-700 py-8 min-h-screen">

    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-4">Aplikasi Kontak Larafky</h1>
        <p class="text-lg text-center text-gray-700 dark:text-gray-300 mb-12">Halo!</p>

        <!-- Tabel Dosen -->
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Kontak Dosen</h2>
        @include('partials.search', ['inputId' => 'search-input-dsn', 'entriesId' => 'entries-dsn'])
        <div class="overflow-hidden shadow-lg rounded-lg bg-white mb-12">
            <table id="contacts-dosen" class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">No.</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Nama</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Email</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-50">
                            <td class="py-3 px-4 border border-gray-300">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['name'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['email'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tabel Mahasiswa -->
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Kontak Mahasiswa</h2>
        @include('partials.search', ['inputId' => 'search-input-mhs', 'entriesId' => 'entries-mhs'])
        <div class="overflow-hidden shadow-lg rounded-lg bg-white">
            <table id="contacts-mahasiswa" class="min-w-full border-collapse border border-gray-300">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">No.</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Nama</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Email</th>
                        <th class="py-3 px-4 text-left font-semibold border-b border-gray-300">Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-50">
                            <td class="py-3 px-4 border border-gray-300">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['name'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['email'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Form Kontak dihapus -->

    </div>
</div>

<script>
    const searchInputDsn = document.getElementById("search-input-dsn");
    const searchInputMhs = document.getElementById("search-input-mhs");
    const entriesSelectDsn = document.getElementById("entries-dsn");
    const entriesSelectMhs = document.getElementById("entries-mhs");
    const contactsTableDsn = document.getElementById("contacts-dosen");
    const contactsTableMhs = document.getElementById("contacts-mahasiswa");

    function filterTable(input, table) {
        const query = input.value.toLowerCase();
        const rows = table.querySelectorAll("tbody tr");

        rows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            row.style.display = rowText.includes(query) ? "" : "none";
        });
    }

    function changeTableRows(select, table) {
        const rows = table.querySelectorAll("tbody tr");
        const limit = parseInt(select.value, 10);

        rows.forEach((row, index) => {
            row.style.display = index < limit ? "" : "none";
        });

        select.previousElementSibling.value = ""; 
    }

    searchInputDsn.addEventListener("keyup", () => filterTable(searchInputDsn, contactsTableDsn));
    searchInputMhs.addEventListener("keyup", () => filterTable(searchInputMhs, contactsTableMhs));
    entriesSelectDsn.addEventListener("change", () => changeTableRows(entriesSelectDsn, contactsTableDsn));
    entriesSelectMhs.addEventListener("change", () => changeTableRows(entriesSelectMhs, contactsTableMhs));

    window.onload = () => {
        changeTableRows(entriesSelectDsn, contactsTableDsn);
        changeTableRows(entriesSelectMhs, contactsTableMhs);
    };
</script>
@endsection
