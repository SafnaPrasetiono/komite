<div>
    <div class="row g-3">
        @foreach ($images as $items)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="btn-galery ratio ratio-4x3" wire:click='show({{ $items->id_galleries }})'>
                <div class="img-galery" style="background-image: url('/images/galleries/{{$items->location}}')"></div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="modal fade" id="imgModals" tabindex="9">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    @if($img)
                    <img src="{{ url('/images/galleries/' . $img->location) }}" alt="{{ $img->name_galleries }}" class="img-fluid">
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('showModals', function() {
            $('#imgModals').modal('show');
        })
    </script>
</div>