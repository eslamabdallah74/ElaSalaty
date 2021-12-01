<div class="py-4" style="margin: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"> Level </div>
            @foreach ($prayers as $prayer )
            <div class="py-2 col-md-2">
                <div class="btn-contain">
		               <button  wire:click='Prayed()' class="col btn btn-light-moon"> {{ $prayer->pray_name }} </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
