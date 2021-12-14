<div class="py-4" style="margin: 40px 0;">

    <div class="container">
        <div class="row">
            <div class="py-2 col-md-2"> </div>
            @foreach ($prayers as $prayer )
            <div class="py-2 col-md-2">
                <div class="btn-contain">
                        <button
                         wire:click='Prayed({{$prayer->id}})'
                         class="bg-blue-500 p-4 text-gray-50 rounded-md hover:text-gray-200 cursor-pointer"
                         >
                        {{ $prayer->pray_name }}
                        </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5 class="py-10 text-center" style="color: #ff4d4d;"> {{ $failed }} </h5>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 progress" style="height: 40px;">
                    <div class="progress-bar bg-success py-2"  role="progressbar" style="width: {{ $GetExp->exp }}%; color:white;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> {{ $GetExp->exp }} Exp</div>
                </div>
            </div>
        </div>
        <!-- LEVEL -->
        <div class="row py-6">
            <div class="col-md-6">
                <div>
                    <img class="rounded-3xl" src="{{asset('img/your_level.svg')}}" alt="level">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-8xl rounded-3xl text-center py-4 h-full underline bg-gray-900 text-gray-100">{{ $level->level }}</div>
            </div>
        </div>
    </div>
</div>

