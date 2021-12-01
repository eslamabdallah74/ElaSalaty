<div class="py-4" style="margin: 40px 0;">
    <div class="row">
        <div class="col-md-2"></div>
        @foreach ($prayers as $prayer )
        <div class="col-md-2">
        <div class="btn-contain">
            <button wire:click='Prayed()' id="btn" class="btn"> {{ $prayer->pray_name }} </button>
            <div class="btn-particles">
            </div>
        </div>
        </div>
        @endforeach
    </div>
        <!-- Progress Bar -->
        <div class="row">
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
    </div>
</div>
