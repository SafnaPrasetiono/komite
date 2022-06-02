<div>
    <div class="row">
        @foreach ($images as $items)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="btn-galery ratio ratio-4x3" wire:click='show({{ $items->id_galleries }}, {{ $numbers }})'>
                <div class="img-galery" style="background-image: url('/images/galleries/{{$items->location}}')"></div>
            </div>
        </div>
        @endforeach
    </div>

    @if($img)
    <div class="myModals{{$numbers}} modal fade" id="imgModals{{$numbers}}" tabindex="1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="{{ url('/images/galleries/' . $img->location) }}" alt="{{ $img->name_galleries }}"
                        class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    <script>
        document.addEventListener('showModals', function(events) {
            $('.myModals' + events.detail).modal('show');
        })
    </script>
</div>
