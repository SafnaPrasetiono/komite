<div>
    <div class="py-5 position-relative">
        <div class="background-left"></div>
        <div class="background-right"></div>
        <div class="container">
            <div class="d-flex align-items-center py-3 galery-title">
                <i class="fas fa-image fa-2x fa-fw text-dark-blue"></i>
                <p class="mb-0 fs-3 fw-bold ms-2 text-dark-blue">Galeri KOPITU</p>
            </div>
            @foreach ($data as $index => $item)
            <div class="galery-content d-flex align-items-stretch">
                <div class="galery-grid d-flex position-relative" style="width: 21px;">
                    @if ($index == 0)
                    <div class="box-border mt-5"></div>
                    @elseif($data->count() == $index)
                    <div class="box-border mb-5"></div>
                    @else
                    <div class="box-border"></div>
                    @endif
                    <div class="box-rounded"></div>
                </div>
                <div class="box-galery">
                    <i class="box-icon fas fa-caret-left fa-3x fa-fw"></i>
                    <div class="box-content">
                        <div class="p-3 border-bottom">
                            <p class="mb-0 fw-bold fs-5 text-dark-blue">{{ $item->title }}</p>
                        </div>
                        <div class="p-3">
                            <p class="text-primary mb-2">
                                {{ $item->locations }},
                                @if ($item->date_start == $item->date_end)
                                {{date('d F Y', strtotime($item->date_end))}}
                                @else
                                {{date('d', strtotime($item->date_start))}}
                                <span> - </span>
                                {{date('d F Y', strtotime($item->date_end))}}
                                @endif
                            </p>
                            <p class="mb-0 text-dark-blue">
                                <?php echo $item->description ?>
                            </p>
                        </div>
                        <div class="p-3">
                            @livewire('pages.data.images', ['post' => $item, 'indexs' => $index + 1])
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container pt-5 pb-3">
            <div class="d-block text-center">
                <a href="#" class="btn btn-outline-primary px-5">Lihat Semua Galery</a>
            </div>
        </div>
    </div>


    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        $(window).scroll(() => {
            var wScroller = $(this).scrollTop();
            if (wScroller > $('.galery-box').offset().top - 400) {
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
    </script>
</div>