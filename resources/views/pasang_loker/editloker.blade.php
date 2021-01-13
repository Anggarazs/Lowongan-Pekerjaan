<x-app-layout>      

    <div class="card">
        <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
            <h1>EDIT LOKER</h1>
          </div>
        <div class="card-header">
        </div>
        <div class="card-content"> 
        <div class="card-body">
            <form method="post" action="{{route('loker.update',$loker->id)}}">
                @csrf
                @method('PUT')
            <div class="form-body">
                <div class="row">
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Nama Perusahaan</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama perusahaan" id="first-name-icon" value="{{$loker->nama_perusahaan}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Bidang</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="bidang" placeholder="Bidang Perusahaan" id="first-name-icon"  value="{{$loker->bidang}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Penempatan Bagian</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="bagian" placeholder="Jenis pekerjaan yang akan dilowongkan" id="first-name-icon"  value="{{$loker->bagian}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Nomor Perusahaan</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="no_perusahaan" placeholder="Nomor perusahaan" id="first-name-icon"  value="{{$loker->no_perusahaan}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Berlaku</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="berlaku" placeholder="Tanggal berlakunya lowongan" id="first-name-icon" value="{{$loker->berlaku}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Kadaluarsa</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="kadaluarsa" placeholder="Batas pendaftaran lowongan" id="first-name-icon" value="{{$loker->kadaluarsa}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="first-name-icon">Lokasi</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi perusahaan" id="first-name-icon"  value="{{$loker->lokasi}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12">
                    
                    <div class="form-group has-icon-left">
                        <label for="email-id-icon">Email</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="email" placeholder="Email" id="email-id-icon"  value="{{$loker->email}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="mobile-id-icon">Mobile</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" name="no_telp" placeholder="No Telepon" id="mobile-id-icon" value="{{$loker->no_telp}}">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div class="form-group has-icon-left">
                        <label for="password-id-icon">Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" placeholder="Password" id="password-id-icon">
                            <div class="form-control-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-12">
                    <div class="form-check">
                        <div class="checkbox mt-2">
                            <input type="checkbox" id="remember-me-v" class="form-check-input" checked="">
                            <label for="remember-me-v">Remember Me</label>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </x-app-layout>