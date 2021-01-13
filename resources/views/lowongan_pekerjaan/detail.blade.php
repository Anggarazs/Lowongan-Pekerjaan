<x-app-layout>
    <link href="{{url("css/button.css")}}" rel="stylesheet">
    <div class="col-lg-6 col-lg-12">
        <div class="card">
            <div class="card-content">
                <img class="card-img-top img-fluid" src="{{asset('images/samples/1.jpg')}}"
                    alt="Card image cap" />
                    {{-- <form method="post" action="{{route('loker.edit',$loker->id)}}"> --}}
                <div class="card-body">
                    <h4 class="card-title">NAMA PERUSAHAAN</h4>
                    <p class="card-text">
                        {{$loker->nama_perusahaan}}
                        <br><br><br>
                    <ul class="list-group list-group-flush">
                        <h4 class="card-title">BIDANG</h4>
                            <li class="list-group-item">
                                {{$loker->bidang}}   
                            </li>
                        <h4 class="card-title">PENEMPATAN BAGIAN</h4>
                            <li class="list-group-item">
                                {{$loker->bagian}}
                            </li>
                        <h4 class="card-title">NOMOR PERUSAHAAN</h4>
                            <li class="list-group-item">
                                {{$loker->no_perusahaan}}
                            </li>
                        <h4 class="card-title">BERLAKU</h4>
                            <li class="list-group-item">
                                {{$loker->berlaku}}
                            </li>
                        <h4 class="card-title">KADALUARSA</h4>
                            <li class="list-group-item">
                                {{$loker->kadaluarsa}}
                            </li>
                        <h4 class="card-title">LOKASI</h4>
                            <li class="list-group-item">
                                {{$loker->lokasi}}
                            </li>
                        <h4 class="card-title">EMAIL</h4>
                            <li class="list-group-item">
                                {{$loker->email}}
                            </li>
                        <h4 class="card-title">MOBILE</h4>
                            <li class="list-group-item">
                                {{$loker->no_telp}}
                            </li>
                </div>
                <a href="{{route('loker.edit',$loker->id)}}" class="btn info"><span>EDIT</span></a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


