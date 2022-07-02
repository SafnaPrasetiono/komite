<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/') }}/beranda/keanggotaan</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/') }}/beranda/berita</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.8</priority>
    </url>


    <url>
        <loc>{{ url('/') }}/beranda/event</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/') }}/beranda/kaleidoskop</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/') }}/beranda/tentang-kami</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/') }}/beranda/keanggotaan/daftar</loc>
        <lastmod>2022-07-02T04:42:02+01:00</lastmod>
        <priority>0.6</priority>
    </url>

    @foreach ($news as $itemNews)
    <url>
        <loc>{{ url('/') }}/beranda/berita/{{ $itemNews->slug }}</loc>
        <lastmod>{{ $itemNews->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

    @foreach ($events as $itemEvents)
    <url>
        <loc>{{ url('/') }}/beranda/event/{{ $itemEvents->slug }}</loc>
        <lastmod>{{ $itemEvents->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

</urlset>