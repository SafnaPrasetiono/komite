<div>
    <div class="py-5 position-relative overflow-hidden">
        <div class="background-left"></div>
        <div class="background-right"></div>
        <div class="container mb-3">
            <div class="d-flex align-items-center py-3 galery-title">
                <i class="fas fa-image fa-2x fa-fw text-dark-blue"></i>
                <p class="mb-0 fs-3 fw-bold ms-2 text-dark-blue">Galeri KOPITU</p>
            </div>
            <div class="row g-2 justify-content-center align-items-stretch">
                @foreach ($data as $index => $item)
                @if ($index == 0)
                <div class="col-6 col-md-6">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 1)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 2)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 3)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 4)
                <div class="col-6 col-md-6">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 5)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 6)
                <div class="col-6 col-md-6">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 7)
                <div class="col-6 col-md-6">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 8)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 9)
                <div class="col-6 col-md-3">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @elseif ($index == 10)
                <div class="col-6 col-md-6">
                    <button wire:click='show({{$item->id_galleries}})' type="button" class="btn-img">
                        <div class="img-gallery"
                            style="background-image: url('/images/galleries/{{$item->location }}')">
                        </div>
                    </button>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="container pt-5 pb-3">
            <div class="d-block text-center">
                <a href="{{ route('gallery') }}" class="btn btn-outline-primary px-5">Lihat Semua Galery</a>
            </div>
        </div>
    </div>

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
              $(window).scroll(() => {
                  var wScroller = $(this).scrollTop();
                  if (wScroller > $('.galery-box').offset() - 400) {
                      $('.galery-title').removeClass('opacity-0');
                      $('.galery-title').addClass('animate__animated animate__fadeInLeft');
                      $('.news-botton').removeClass('opacity-0');
                      $('.news-botton').addClass('animate__animated animate__fadeInLeft');
                      $('.galery-content').each((i) => {
                          setTimeout(() => {
                              // $('.galery-grids').eq(i).addClass('d-block');
                              $('.galery-grid').eq(i).removeClass('opacity-0');
                              $('.galery-grid').eq(i).addClass('animate__animated animate__slideInUp');
                              $('.box-rounded').eq(i).addClass('animate__animated animate__fadeIn animate__slow');
                              $('.box-galery').eq(i).removeClass('opacity-0');
                              $('.box-galery').eq(i).addClass('animate__animated animate__slideInRight animate__slow');
                          }, 500 * i + 1);
                      });
                  }
              });
        });
    </script>
</div>