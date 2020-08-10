
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> <strong> INPUT KINERJA PENELITIAN DOSEN </strong> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="#" method="POST">
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> NO </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" name="no" placeholder="NO" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Jenis Kegiatan </label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="jenisKegiatan" placeholder=" Jenis Kegiatan">
                      </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Bukti Penugasan </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="Buktitugas" placeholder="Bukti Penugasan" onchange="tampilkan()" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> SKS </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="sks"  onchange="tampilkan()">
                                <option value=""  class="form-control">-- SKS--</option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3</option>
                            </select>
                         </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Masa Penugasan </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" require name="nama_dekan" placeholder="Masa Penugasan" onchange="tampilkan()" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> SKS </label>
                        <div class="col-md-8">
                           <input type="text" require name="sks" class="form-control" onchange="tampilkan()">
                         </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Rekomendasi </label>
                    <div class="col-md-8" >
                    <select class="form-control" required name="req"  onchange="tampilkan()">
                                <option value=""  class="form-control">-- Rekomendasi --</option>
                                <option value="Selesai"> Selesai </option>
                                <option value="Belum Selesai"> Belum Selesai </option>
                            </select>
                    </div>
                </div>
            </form>
        </div>
    
      <div class="modal-footer">
        <button type="button" class="btn-danger" data-dismiss="modal"> Close </button>
        <button type="reset" class="btn-warning"> Reset </button>
        <button type="button" class="btn-success"> Save changes </button>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------- END MODAL --------------------------------------------------------->
<!---------------------------------------- PAGE CONTENT ------------------------------------------------------>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Input Kinerja Penelitian </h4> 
            </div>
                
        </div>
   

            <div class="align-content-around">
                <button  class=" btn-primary fa fa-plus fa" data-toggle="modal" data-target="#exampleModalLong">
                Tambah   
                </button>
                
         </div>
     </div>
      <table class="table table-striped table-bordered dt-responsive nowrap" >
                <tr>
                        <th> NO </th>
                        <th> Jenis Kegiatan </th>
                        <th>  Bukti Penugasan </th>
                        <th> SKS </th>
                        <th> Masa Penugasan </th>
                        <th> Bukti Dokumen </th>
                        <th> SKS </th>
                        <th> Rekomendasi </th>
                </tr>
                <tr>           
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                         <button type="button" class=" btn-warning fa fa-edit" data-toggle="modal" >
                         Ubah
                        </button>             
                    </td>
                </tr> 
        </table>
    </div>
</div>
