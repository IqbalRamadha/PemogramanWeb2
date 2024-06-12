<x-layout>
    <x-slot name="page_name">Halaman Pasien  / Create</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/store') }}" method="post">
           @csrf
           
           <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="kode" name="kode" placeholder="Kode Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                        placeholder="Tempat Lahir pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        placeholder="Tanggal Lahir Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                        <label class="form-check-label" for="gender_male">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                        <label class="form-check-label" for="gender_female">Perempuan</label>
                    </div>
                </div>
            </div>
          <div class="form-group row">
              <label for="kecamatan_nama" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" name="email"
                      placeholder="Masukkan Email">
              </div>
          </div>
          <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Pasien"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kel_nama" class="col-sm-4 col-form-label">Kelurahan</label>
                <div class="col-sm-8">
                    <select class="form-control" id="kelurahan_id" name="kelurahan_id">
                        <option value="">Pilih Kelurahan</option>
                        @foreach($kelurahans as $pasien)
                        <option value="{{ $pasien->kelurahan_id }}">{{ $pasien->kelurahan_id }}</option>
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