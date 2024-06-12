<x-layout>
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pasien/update', $pasien->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="kode" name="kode" placeholder="Kode Pasien" value="{{ $pasien->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien" value="{{ $pasien->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Pasien" value="{{ $pasien->tempat_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir Pasien" value="{{ $pasien->tanggal_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gender_male" value="L" {{ $pasien->jenis_kelamin == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_male">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gender_female" value="P" {{ $pasien->jenis_kelamin == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ $pasien->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Pasien">{{ $pasien->alamat }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelurahan_id" class="col-sm-4 col-form-label">Kelurahan</label>
                <div class="col-sm-8">                                  
                   <select class="form-control" id="kelurahan_id" name="kelurahan_id">
                        <option value="{{$pasien->kelurahan_id}}">Pilih Kelurahan</option>
                        @foreach($kelurahans as $kelurahan)
                            <option value="{{ $kelurahan->nama }}"{{ $pasien->kelurahan_id === $kelurahan->nama ? 'selected' : '' }}>{{ $kelurahan->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>
