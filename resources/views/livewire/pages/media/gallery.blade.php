<div>
    <div class="d-block mb-3">
        <div class="row g-2 justify-content-center align-items-stretch">
            @foreach ($data as $index => $item)
            @if ($index == 0)
            <div class="col-6 col-md-6">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 1)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 2)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 3)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 4)
            <div class="col-6 col-md-6">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 5)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 6)
            <div class="col-6 col-md-6">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 7)
            <div class="col-6 col-md-6">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 8)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 9)
            <div class="col-6 col-md-3">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @elseif ($index == 10)
            <div class="col-6 col-md-6">
                <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')">
                    </div>
                </button>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @if ($data->hasPages())
    <div class="d-flex align-items-center">
        <nav class="ms-auto">
            {{ $data->links('layouts.paginations') }}
        </nav>
    </div>
    @endif

    @if ($detail)    
    <div wire:ignore.self class="modal fade" id="Modals" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header py-2 px-3">
                    <p class="fw-bold mb-0">Detail Gambar</p>
                    <button type="button" class="btn py-1 px-2" data-bs-dismiss="modal">
                        <i class="fas fa-times fa-sm fa-fw"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <img src="{{ url('/images/galleries/' . $detail->location) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    @endif


    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          document.addEventListener('showModals', function(){
            $('#Modals').modal('show');
          })
        });
    </script>
</div>