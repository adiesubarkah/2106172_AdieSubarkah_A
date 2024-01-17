<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
        <div class="form-style-10">
            <h1>Sensus!<span>Pendataan penduduk!</span></h1>
            <form class="form" method="POST" action="proses_input.php">
                <div class="section"><span>1</span>Data Pribadi.</div>
                <div class="inner-wrap">
                    <label for="user_name">Nama <input
                      type="text"
                      required
                      require
                      name="user_name"
                      id="user_name"
                    /></label>
                    <label for="jenis_kelamin"> Jenis Kelamin
                        <select name="jenis_kelamin">
                          <option disabled selected hidden>Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                    </label>
                    <label for="tanggal"> Tanggal Lahir
                        <input
                          type="date"
                          required
                          require
                          name="tanggal"
                          placeholder=" "
                        />
                    </label>
                    <label for="perkawinan"> Status Perkawinan
                        <select name="perkawinan">
                          <option disabled selected hidden>
                            Status Perkawinan
                          </option>
                          <option value="true">Menikah</option>
                          <option value="false">Belum menikah</option>
                        </select>
                    </label>
                    <label for="hubungan">
                        Status Hubungan
                        <select name="hubungan">
                          <option disabled selected hidden>Status Hubungan</option>
                          <option value="Kepala keluarga">Kepala keluarga</option>
                          <option value="Suami">Suami</option>
                          <option value="Istri">Istri</option>
                          <option value="Anak">Anak</option>
                          <option value="Menantu">Menantu</option>
                          <option value="Cucu">Cucu</option>
                        </select>
                    </label>
                </div>

                <div class="section"><span>2</span>Alamat</div>
                <div class="inner-wrap">
                    <label for="provinsi">Provinsi <select name="provinsi">
                      <option disabled selected hidden>Provinsi</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="Jawa Timur">Jawa Timur</option>
                    </select></label>
                    <label for="kota"> Kabupaten/Kota
                        <input type="text" required require name="kota" />
                    </label>
                    <label for="kecamatan"> Kecamatan
                        <input type="text" required require name="kecamatan" />
                    </label>
                    <label for="desa"> Desa
                        <input type="text" required require name="desa" />
                    </label>
                    <label for="rt"> RT
                        <input type="number" required require name="rt" />
                    </label>
                    <label for="rw"> RW
                        <input type="number" required require name="rw" />
                    </label>
                    <label for="jalan">
                        jalan
                        <input type="text" required require name="jalan" />
                    </label>
                </div>

                <div class="section"><span>3</span>Keterangan Tempat Tinggal</div>
                <div class="inner-wrap">
                    <label for="status_kepemilikan">Status Kepemilikan 
                        <select name="status_kepemilikan">
                        <option disabled selected hidden>
                            Status Kepemilikan
                        </option>
                        <option value="Milik Sendiri">Milik Sendiri</option>
                        <option value="Sewa">Sewa</option>
                        <option value="Menumpang">Menumpang</option>
                        <option value="Lainnya">Lainnya</option>
                        </select>
                    </label>
                    <label for="listrik"> 
                        Listrik
                        <input type="text" required require name="listrik" />
                    </label>
                    <label for="air_minum"> 
                        Air Minum
                        <input type="text" required require name="air_minum" />
                    </label>
                </div>

                <div class="section"><span>4</span>Aktivitas</div>
                <div class="inner-wrap">
                    <label for="bekerja">
                        <input
                            type="radio"
                            id="bekerja"
                            name="aktivitas"
                            value="bekerja"
                        />
                        Bekerja 
                    </label>
                    <label for="mrt">
                        <input
                           type="radio"
                           id="mrt"
                           name="aktivitas"
                           value="Rumah Tangga"
                       />
                        Rumah Tangga
                    </label>
                    <label for="sekolah/kuliah">
                        <input
                            type="radio"
                            id="sekolah/kuliah"
                            name="aktivitas"
                            value="sekolah/kuliah"
                        />
                        Sekolah/Kuliah
                    </label>
                    <label for="pensiun">
                        <input
                            type="radio"
                            id="pensiun"
                            name="aktivitas"
                            value="pensiunan"
                        />
                        Pensiunan
                    </label>
                    <label for="pnggrn">
                        <input
                            type="radio"
                            id="pnggrn"
                            name="aktivitas"
                            value="tidak bekerja"
                        />
                        Tidak bekerja
                    </label>
                    <label for="lainnya">
                        <input
                            type="radio"
                            id="lainnya"
                            name="aktivitas"
                            value="lainnya"
                        />
                        lainnya
                    </label>
                </div>

                <div class="button-section">
                    <input type="submit" name="submit"/>
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>