<div class="py-4" style="margin: 40px 0;">

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="font-size: 18px;"> <span class="level"> {{ $level->level }} </span> المستوي </div>
            @foreach ($prayers as $prayer )
            <div class="py-2 col-md-2">
                <div class="btn-contain">
                        <button
                         wire:click='Prayed({{$prayer->id}})'
                         @if ($prayer->clicked === 1)
                         class="bg-blue-500 p-4 text-gray-50 rounded-md opacity-50"
                         @else
                         class="bg-blue-500 p-4 text-gray-50 rounded-md"
                         @endif
                         >
                        {{ $prayer->pray_name }}
                        </button>
                </div>
            </div>
            @endforeach
        </div>
        <h5 class="py-2" style="color: #ff4d4d;"> {{ $failed }} </h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 progress" style="height: 40px;">
                    <div class="progress-bar bg-success py-2"  role="progressbar" style="width: {{ $GetExp->exp }}%; color:white;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> {{ $GetExp->exp }} Exp</div>
                </div>

            </div>
        </div>
    </div>
</div>

