<div class="py-4" style="margin: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="font-size: 18px;"> <span class="level"> {{ $level->level }} </span> المستوي </div>
            @foreach ($prayers as $prayer )
            <div class="py-2 col-md-2">
                <div class="btn-contain">
		               <button  wire:click='Prayed()'  class="col btn btn-light-moon"> {{ $prayer->pray_name }} </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 progress">
                    <div class="progress-bar bg-success"  role="progressbar" style="width: {{ $GetExp->exp }}%; color:black;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> {{ $GetExp->exp }} Exp</div>
                </div>
            </div>
        </div>
    </div>
</div>

