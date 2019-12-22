@extends('landing.app')
@section('content')
<section id="section-create-forum">
        <div class="container">
          <form>
            <div class="card px-5 py-5 my-2">
              <h3 class="card-title">AYO DISKUSI!</h3>
              <div class="card-body">
                <div class="row py-1">
                  <div class="col">
                        <div class="form-group">
                          <label for="judulForum">Judul forum</label>
                          <input type="text" class="form-control" id="judulForum" aria-describedby="judulHelp">
                          <small id="judulHelp" class="form-text text-muted">Judulnya apa ya ? biar tau nih</small>
                        </div>
                  </div>
                </div>
                <div class="row py-1">
                  <div class="col">
                    <div class="form-group">
                      <label for="kategoriForum">Kategori forum</label>
                      <select class="custom-select" id="kategoriForum">
                        <option selected value="">Forum tentang apa nih?</option>
                        <option value="Reptil">Reptil</option>
                        <option value="Kucing">Kucing</option>
                        <option value="Anjing">Anjing</option>
                        <option value="Ikan">Ikan</option>
                        <option value="Lainnya">Burung</option>
                      </select>
                      <small id="judulHelp" class="form-text text-muted">Forumnya bahas apa nih hayo? dipilih ya biar ga ke campur</small>
                    </div>
                  </div>  
                </div>
                <div class="row py-1">
                  <div class="col">
                    <div class="form-group">
                          <label for="forumDesc">Topik yang ditanyakan</label>
                          <textarea name="deskripsi" id="forumDesc" class="form-control ckeditor" aria-describedby="descHelp"></textarea>
                          <small id="descHelp" class="form-text text-muted">Tanyainnya bebas aja , yang penting ga aneh aneh wkwkwk</small>
                        </div>
                  </div>
                </div>
                <button type="submit" id="submitButton" class="btn btn-pink">TANYAIN!!</button>
              </div>
            </div>
          </form>
        </div>    
    </section>
    
@endsection