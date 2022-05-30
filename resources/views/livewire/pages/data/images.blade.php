<div>
    <div class="row">
        @foreach ($images as $items)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="btn-galery ratio ratio-4x3" wire:click='show({{ $items->id_galleries }})'>
                <div class="img-galery" style="background-image: url('/images/galleries/{{$items->location}}')"></div>
            </div>
        </div>
        @endforeach
    </div>

</div>