<div>
    <div class="py-5">
        <div class="container py-3">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex text-dark-blue">
                    <i class="fas fa-video fa-2x fa-fw"></i>
                    <h4 class="fw-bold ms-3">Video KOPITU</h4>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill py-1 ms-auto">
                    Semua <i class="fas fa-angle-right fa-sm fa-fw"></i>
                </a>
            </div>
            <div class="d-block mb-4">
                <div class="row g-3">
                    @foreach ($data as $index => $item)
                    <div class="col-12 col-sm-6 col-lg-4 ">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $item->links }}" title="{{ $item->title }}" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>