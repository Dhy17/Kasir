<x-layout>

    <x-slot:title>Categoris</x-slot:title>
    <div class="text-right"> <a href="/categoris/create" class="btn bg-black-400">Tambah</a></div>
    <div class="border">
        <div class="overflow-x-auto">
            <table class="table text-center">
                <!-- head -->
                <thead class="bg-white text-black text-semibold ">
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>aktif</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>anu</td>
                        <td>aktif</td>
                        <td><a href="/categoris/edit" class="btn bg-blue-500">edit</a> <button
                                class="btn bg-red-700">Hapus</button></td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>2</th>
                        <td>anu lagi</td>
                        <td>aktif</td>
                        <td><button class="btn bg-blue-500">edit</button> <button class="btn bg-red-700">Hapus</button>
                        </td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>3</th>
                        <td>anu lagio lagi</td>
                        <td>aktif</td>
                        <td><button class="btn bg-blue-500">edit</button> <button class="btn bg-red-700">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
