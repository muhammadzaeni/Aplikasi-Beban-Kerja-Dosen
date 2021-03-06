<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Input Data Dosen </h4> 
            </div>
                
        </div>
        <form action="#" method="POST">
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> NO. Sertifikat </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="nosertif" placeholder="No Sertifikat" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                 <label for="nama" class="col-md-3 col-form-label "> NIP </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="nip" placeholder="NIP" onchange="tampilkan()">
                    </div>
                </div>
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> Nama Lengkap </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="nama_lengkap" placeholder="Nama Lengkap" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Tanggal Lahir </label>
                        <div class="col-md-8" >
                       <Input type="date" class="form-control" name=" date" min="1960-12-30" max="1993-12-12"/>
                        </div>        
                </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Tempat Lahir </label>
                        <div class="col-md-8" >
                       <Input type="text" class="form-control" name="tempatlahir"/>
                        </div>        
                </div>
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> Nama Perguruan Tinggi </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="nama_perguruan" placeholder="Nama Perguruan Tinggi" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> Alamat Perguruan Tinggi </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="alamat_perguruan" placeholder="Alamat Perguruan Tinggi" onchange="tampilkan()">
                    </div>
                </div>
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> Program Studi </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="program_studi" placeholder="Program Studi" onchange="tampilkan()" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Jenis Jabatan </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="jenis_perguruan" onchange="tampilkan()">
                                <option value=""  class="form-control">-- Jenis Jabatan --</option> 
                                <option value="Dekan"> Dekan </option>
                                <option value="Wakil Dekan"> Wakil Dekan </option>
                                <option value="Ketua Prodi "> Ketua Prodi </option>
                                <option value="Sekretaris Prodi"> Sekretaris Prodi </option>
                                <option value="Koordinator Labolatorium"> Koordinator Labolatorium </option>
                                <option value="Koordinator Kerja Praktek"> Koordinator Kerja Praktek </option>
                                <option value="Koordinator Tugas Akhir"> Koordinator Tugas Akhir </option>
                                <option value="Ketua Lppm "> Ketua Lppm </option>
                                
                            </select>
                         </div>
                 </div>
                
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Nama Fakultas </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="nama_fakultas"  onchange="tampilkan()">
                                <option value=""  class="form-control">-- Nama Fakultas --</option>
                                <option value="FAKULTAS TEKNIK"> Fakultas Teknik </option>
                            </select>
                         </div>
                 </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Nama Prodi </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="nama_prodi" onchange="tampilkan()">
                                <option value=""  class="form-control">-- Nama Prodi --</option>
                                <option value="TEKNIK INFORMATIKA"> Teknik Informatika </option>
                                <option value="TEKNIK SIPIL"> Teknik Sipil </option>
                                <option value="TEKNIK INDUSTRI"> Teknik Industri </option>
                            </select>
                         </div>
                 </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> S1 </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="s1" placeholder="S1" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> S2 </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="s2" placeholder="S2" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> S3 </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="s3" placeholder="S3" onchange="tampilkan()" >
                    </div>
                </div>
                <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Bidang Ilmu </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="ilmu" placeholder="Bidang ILmu" onchange="tampilkan()" >
                    </div>
                </div>
            </form>
            <div>
            <button type="reset" class=" btn-danger"> Reset</button>
        <button type="close" class=" btn-warning" > Close </button>
        <button type="submit" class=" btn-success"> Save </button>
      </div>
        </div>