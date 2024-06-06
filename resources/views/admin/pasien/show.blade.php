<x-layout>
    <x-slot name="page_name">Detail Pasien</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Pasien yang dipilih :</x-slot>
        <x-slot name="page_content">
                <table class="table table-bordered ">
                    <tr class="table-success">
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama </th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Kelurahan </th>
                        <th>Create at</th>
                        <th>Update at</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{ $pasien->kode }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->tempat_lahir }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->email }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->kelurahan_id }}</td>
                        <td>{{ $pasien->created_at }}</td>
                        <td>{{ $pasien->updated_at }}</td>
                        
                    </tr>
                </table>
        </x-slot>
</x-layout>