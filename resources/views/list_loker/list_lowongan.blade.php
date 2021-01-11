<x-app-layout>
<section id="basic-modals">
    @foreach ($listloker as $loker)
    <div class="row">        
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        {{$loker->nama_perusahaan}}
                    </h4><hr>
                </div>
                <div class="card-body">
                    Bidang  : {{$loker->bidang}}<br>
                    Berlaku : {{$loker->berlaku}} sampai {{$loker->kadaluarsa}} <br><br>
                    <!-- Button trigger for extra large -->
                    <button type="button" class="btn btn-outline-primary block" data-toggle="modal" data-target="#xlarge">
                        Detail
                    </button>
                </div>   
            </div>
        </div>
    </div>
    @endforeach
</section> 
</x-app-layout>