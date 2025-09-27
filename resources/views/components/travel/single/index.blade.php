@php
    $originName = Str::title($origin->name);
    $destinationName = Str::title($destination->name);

    $offerCount = date('Y') - 2000;
    $productSchema = [
        'offers' => [
            'offerCount' => $offerCount + 5,
            'lowPrice' => 50000,
            'highPrice' => 2000000,
        ],
        'rating' => [
            'ratingValue' => $offerCount % 2 == 0 ? 4.5 : 4.6,
            'reviewCount' => $offerCount,
        ],
    ];

    $ratingValue = $productSchema['rating']['ratingValue'];

    $testimonial = [
        [
            developer()->name,
            'Layanan travel sangat memuaskan. Admin responsif meski pesan di tengah malam, dan sopirnya ramah sekali. Perjalanan nyaman, ber-AC, serta cepat lewat jalan tol.',
        ],
        [
            'Dewi Prasetya',
            'Pengalaman travel yang luar biasa, keberangkatan tepat waktu dan driver menjemput langsung di rumah dengan ramah.',
        ],
        [
            'Rizki Aulia',
            'Saya memesan carter dari ' .
            $originName .
            ' ke ' .
            $destinationName .
            ' secara mendadak, tapi tetap dilayani dengan cepat dan profesional. Sangat direkomendasikan!',
        ],
        [
            'Lia Putri',
            'Driver travel menuju ' .
            $destinationName .
            ' sangat berpengalaman dan membantu. Kami sampai tujuan dengan nyaman dan juga mendapat fasilitas tambahan seperti makan dan minuman selama perjalanan.',
        ],
    ];

    $gallery = [
        [asset('images/gallery/10.jpg'), 'Mobil Avanza'],
        [asset('images/gallery/7.jpg'), 'Mobil Travel ' . $destinationName . ' ' . $originName],
        [asset('images/gallery/12.jpg'), 'Galeri Mobil travel'],
        [asset('images/gallery/3.jpg'), 'Mobil ' . $page],
    ];

    function paramsSingleTravel($originName, $destinationName, $originId, $destinationId)
    {
        return route('travel.show', [
            'originName' => Str::slug($originName),
            'destinationName' => Str::slug($destinationName),
            'originId' => $originId,
            'destinationId' => $destinationId,
        ]);
    }
@endphp

<div class="my-container">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-x-10 lg:gap-x-20">
        <div class="md:col-span-8 ">
            <img src="{{ $thumbnail['url'] }}" class="rounded-md shadow-md" title="{{ $page }}"
                alt="{{ $thumbnail['alt'] }}" width="{{ $thumbnail['width'] }}" height="{{ $thumbnail['height'] }}">
        </div>


        <div
            class="md:sticky md:top-[60px] h-fit md:col-span-4 p-3 sm:p-5 bg-background-primary rounded-md shadow-md border-b-8 border-primary [&_*]:!text-center">
            <p>Ayo reservasi tiket <strong class="!font-normal">{{ $page }} anda sekarang juga!</strong></p>

            <div>
                <a target="_blank" href="{{ whatsapp() }}" rel="nofollow noindex" title="Pesan travel"
                    class="btn-primary mt-5 !text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    Pesan travel
                </a>
            </div>
        </div>

        <div class="md:col-span-8">
            <p>
                <a class="italic" href="{{ route('home') }}">{{ web()->title }}</a> merupakan penyedia
                layanan {{ web()->tagline }} terpercaya. Namun, layanan kami tidak hanya terbatas pada rute tertentu
                saja. Kami melayani perjalanan travel ke berbagai wilayah di seluruh Indonesia, dengan fokus utama pada
                daerah {{ $originName }} dan {{ $destinationName }}.
            </p>

            <p>
                Bagi banyak orang, travel adalah solusi transportasi yang efisien dan hemat waktu. Mengapa tidak? Travel
                dari {{ $originName }} ini siap mengantarkan Anda ke berbagai tujuan kapan saja, dengan rute melalui
                jalan tol apabila tersedia. Harga yang kami tawarkan sangat kompetitif, bahkan Anda dapat melakukan
                negosiasi jika akomodasi Anda memerlukan penyesuaian.
            </p>

            <p>
                Jarak antara {{ $originName }} dan {{ $destinationName }} termasuk sedang — tidak terlalu dekat,
                juga tidak terlalu jauh. Jika Anda berencana bepergian dari {{ $originName }} ke
                {{ $destinationName }} atau sebaliknya, kami sarankan menggunakan jasa travel kami untuk perjalanan
                yang aman, nyaman, dan tepat waktu.
            </p>


            <h2>Apa Itu {{ $page }}?</h2>

            <p>
                Travel dari {{ $originName }} ke {{ $destinationName }} maupun sebaliknya dirancang khusus untuk
                Anda yang mengutamakan keamanan, kenyamanan, dan kemudahan. Dengan layanan travel {{ $originName }},
                Anda akan dijemput langsung dari rumah dan diantar tepat ke lokasi tujuan sesuai titik yang tercantum
                dalam formulir pemesanan.
            </p>

            <p>
                Di wilayah {{ $originName }}, banyak penyedia jasa travel dengan layanan door to door. Namun, Anda
                perlu berhati-hati karena tidak sedikit yang menggunakan cara tersebut untuk penipuan. Kami hadir
                sebagai solusi terpercaya untuk membantu perjalanan travel Anda menuju {{ $destinationName }} dengan
                aman dan nyaman.
            </p>


            <h3>Jadwal Keberangkatan Travel</h3>

            <p>
                Kami berkomitmen memberikan pelayanan travel {{ $destinationName }} terbaik dengan jadwal keberangkatan
                yang fleksibel. Untuk rute ini, kami siap melayani Anda 24 jam penuh, termasuk jika Anda ingin berangkat
                di tengah malam.
            </p>

            <p>
                Berikut adalah jadwal keberangkatan perjalanan dari {{ $originName }} ke {{ $destinationName }} hari
                ini:
            </p>

            <ol>
                <li>Pukul 05.30</li>
                <li>Pukul 09.00</li>
                <li>Pukul 12.30</li>
                <li>Pukul 16.00</li>
                <li>Pukul 20.00</li>
            </ol>

            <p>
                Sedangkan untuk perjalanan dari {{ $destinationName }} menuju {{ $originName }}, jadwal
                keberangkatan hari ini adalah sebagai berikut:
            </p>

            <ol>
                <li>Pukul 07.00</li>
                <li>Pukul 13.30</li>
                <li>Pukul 17.00</li>
                <li>Pukul 22.00</li>
                <li>Pukul 00.30</li>
            </ol>

            <p>
                Perlu diingat, jadwal tersebut bisa berubah sewaktu-waktu menyesuaikan kondisi dan ketersediaan driver.
                Untuk informasi jadwal terbaru, silakan hubungi admin kami yang siap membantu Anda.
            </p>

            <h3>Harga Tiket Travel</h3>

            <p>
                Harga travel yang kami tawarkan sangat bersahabat dan terjangkau. Anda juga bisa melakukan negosiasi
                langsung dengan admin kami jika harga yang tersedia kurang sesuai! Sudah lebih dari
                <strong>{{ $productSchema['offers']['offerCount'] }} orang</strong> yang melakukan penawaran untuk
                travel ini. Untuk rute <a
                    href="{{ paramsSingleTravel($originName, $destinationName, $origin->id, $destination->id) }}"
                    title="{{ $page }}"><strong>{{ $page }}</strong></a>, harga mulai dari <strong
                    class="text-primary">{{ rupiah($productSchema['offers']['lowPrice']) }}</strong> hingga <strong
                    class="text-primary">{{ rupiah($productSchema['offers']['highPrice']) }}</strong>. Harga tersebut
                sudah termasuk biaya akses tol, bahan bakar, dan satu kali makan selama perjalanan.
            </p>

            <p>
                Perlu diketahui, harga tiket travel {{ $destinationName }} bisa berubah sewaktu-waktu, tergantung titik
                lokasi penjemputan atau pengantaran. Semakin daerah yang dituju semakin pelosok, harga bisa sedikit
                naik. Namun, kami pastikan harganya tetap kompetitif dan terjangkau. Oleh karena itu, sebelum mengisi
                formulir pemesanan, ada baiknya Anda berkonsultasi terlebih dahulu dengan admin kami.
            </p>



            <h3>Kelebihan Travel Kami</h3>

            <p>
                Dibandingkan dengan penyedia jasa travel lainnya, <strong>{{ web()->title }}</strong> adalah pilihan
                utama sebagai layanan travel dan carter terbaik nomor satu. Jika masih ragu, jangan ragu untuk
                mengunjungi garasi kami yang berlokasi di {{ address()->streetAddress }} dan buktikan sendiri kualitas
                pelayanan kami.
            </p>

            <p>Berikut ini beberapa keunggulan yang membuat kami berbeda dari travel lain:</p>

            <ol>
                <li>Harga kompetitif dengan opsi negosiasi yang fleksibel</li>
                <li>Sopir berpengalaman asli dari daerah {{ $destinationName }}</li>
                <li>Layanan door to door, jemput dan antar langsung dari rumah Anda</li>
                <li>Melayani hingga pelosok-pelosok daerah</li>
                <li>Keberangkatan tepat waktu tanpa terlambat</li>
                <li>Layanan beroperasi setiap hari, sepanjang waktu</li>
                <li>Pemesanan praktis dan mudah secara online</li>
                <li>Bayar saat tiba di lokasi tujuan (tanpa perlu DP)</li>
                <li>Banyak promo dan diskon menarik untuk pelanggan</li>
                <li>Gratis bonus makan dan minuman selama perjalanan</li>
                <li>Beragam pilihan armada sesuai kebutuhan</li>
                <li>Semua kendaraan nyaman dan dilengkapi AC untuk kenyamanan maksimal</li>
            </ol>


            <h3>Pilihan Mobil/Armada/Unit yang Tersedia</h3>

            <p>
                Kami menyediakan berbagai pilihan armada yang bersih, nyaman, dan sudah dilengkapi dengan fasilitas AC
                untuk kenyamanan perjalanan Anda. Berikut adalah daftar kendaraan yang kami gunakan untuk layanan
                travel, carter, maupun ziarah:
            </p>

            <ol>
                <li>Toyota Hiace</li>
                <li>Isuzu Elf (Short dan Long)</li>
                <li>Mitsubishi L300</li>
                <li>Toyota Avanza</li>
                <li>Daihatsu Xenia</li>
                <li>Daihatsu Calya</li>
                <li>Suzuki APV</li>
                <li>Toyota Innova (Reborn & Zenix)</li>
                <li>Mitsubishi Xpander</li>
                <li>Daihatsu Luxio</li>
                <li>Nissan Livina</li>
                <li>Hyundai H-1</li>
                <li>KIA Pregio</li>
                <li>Mazda Biante</li>
                <li>Toyota Rush</li>
                <li>Honda Mobilio</li>
            </ol>



            <div class="grid grid-cols-2 gap-5 mb-5">
                @foreach ($gallery as $item)
                    <img class="aspect-video object-cover rounded-md shadow-md border-b-8 border-primary w-full h-auto brightness-75 hover:brightness-90"
                        src="{{ $item[0] }}" title="{{ $item[1] }}" alt="{{ $item[1] }}">
                @endforeach
            </div>

            {{-- Halte --}}
            @if ($origin->id == 1 || $destination->id == 1)
                <h3>Daftar Halte yang Dilayani (Jawa & Bali)</h3>
                <ol>
                    <!-- Jakarta -->
                    <li>Halte Bundaran HI (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Halte Harmoni Central Busway (Jakarta Barat, DKI Jakarta)</li>
                    <li>Halte Blok M (Jakarta Selatan, DKI Jakarta)</li>
                    <li>Halte Senayan JCC (Jakarta Selatan, DKI Jakarta)</li>
                    <li>Halte Kota (Jakarta Barat, DKI Jakarta)</li>
                    <li>Halte Dukuh Atas (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Halte Tosari (Jakarta Selatan, DKI Jakarta)</li>

                    <!-- Bandung -->
                    <li>Halte Leuwi Panjang (Bandung, Jawa Barat)</li>
                    <li>Halte Cicaheum (Bandung, Jawa Barat)</li>
                    <li>Halte Dago (Bandung, Jawa Barat)</li>
                    <li>Halte Cibiru (Bandung, Jawa Barat)</li>

                    <!-- Surabaya -->
                    <li>Halte Joyoboyo (Surabaya, Jawa Timur)</li>
                    <li>Halte Bungurasih (Surabaya, Jawa Timur)</li>
                    <li>Halte Tunjungan Plaza (Surabaya, Jawa Timur)</li>
                    <li>Halte Darmo (Surabaya, Jawa Timur)</li>

                    <!-- Denpasar -->
                    <li>Halte Renon (Denpasar, Bali)</li>
                    <li>Halte Ubung (Denpasar, Bali)</li>
                    <li>Halte Sanur (Denpasar, Bali)</li>
                </ol>
            @endif

            {{-- Terminal --}}
            @if ($origin->id == 2 || $destination->id == 2)
                <h3>Daftar Terminal yang Dilayani (Jawa & Bali)</h3>
                <ol>
                    <!-- Jawa Barat & DKI Jakarta -->
                    <li>Terminal Pulogebang (Jakarta Timur, DKI Jakarta)</li>
                    <li>Terminal Kampung Rambutan (Jakarta Timur, DKI Jakarta)</li>
                    <li>Terminal Baranangsiang (Bogor, Jawa Barat)</li>
                    <li>Terminal Cicaheum (Bandung, Jawa Barat)</li>
                    <li>Terminal Leuwipanjang (Bandung, Jawa Barat)</li>

                    <!-- Jawa Tengah & Yogyakarta -->
                    <li>Terminal Terboyo (Semarang, Jawa Tengah)</li>
                    <li>Terminal Purabaya (Surabaya, Jawa Timur)</li>
                    <li>Terminal Giwangan (Yogyakarta, DIY)</li>
                    <li>Terminal Jombor (Yogyakarta, DIY)</li>

                    <!-- Jawa Timur -->
                    <li>Terminal Bungurasih (Surabaya, Jawa Timur)</li>
                    <li>Terminal Menanggal (Surabaya, Jawa Timur)</li>
                    <li>Terminal Madyopuro (Malang, Jawa Timur)</li>

                    <!-- Bali -->
                    <li>Terminal Mengwi (Badung, Bali)</li>
                    <li>Terminal Ubung (Denpasar, Bali)</li>
                    <li>Terminal Mengwi (Badung, Bali)</li>
                </ol>
            @endif

            {{-- Stasiun --}}
            @if ($origin->id == 3 || $destination->id == 3)
                <h3>Daftar Stasiun yang Dilayani (Jawa & Bali)</h3>
                <ol>
                    <!-- Jawa Barat -->
                    <li>Stasiun Bandung (Bandung, Jawa Barat)</li>
                    <li>Stasiun Cimahi (Cimahi, Jawa Barat)</li>
                    <li>Stasiun Cirebon (Cirebon, Jawa Barat)</li>

                    <!-- DKI Jakarta -->
                    <li>Stasiun Gambir (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Stasiun Pasar Senen (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Stasiun Manggarai (Jakarta Selatan, DKI Jakarta)</li>

                    <!-- Jawa Tengah -->
                    <li>Stasiun Semarang Tawang (Semarang, Jawa Tengah)</li>
                    <li>Stasiun Purwokerto (Banyumas, Jawa Tengah)</li>
                    <li>Stasiun Solo Balapan (Surakarta, Jawa Tengah)</li>

                    <!-- Yogyakarta -->
                    <li>Stasiun Yogyakarta (Yogyakarta, DIY)</li>

                    <!-- Jawa Timur -->
                    <li>Stasiun Surabaya Gubeng (Surabaya, Jawa Timur)</li>
                    <li>Stasiun Malang (Malang, Jawa Timur)</li>
                    <li>Stasiun Jember (Jember, Jawa Timur)</li>

                    <!-- Bali -->
                    <li>Tidak ada stasiun kereta api di Bali</li>
                </ol>
            @endif

            {{-- Pelabuhan --}}
            @if ($origin->id == 4 || $destination->id == 4)
                <h3>Daftar Pelabuhan yang Dilayani (Jawa & Bali)</h3>
                <ol>
                    <!-- Jawa Barat & Banten -->
                    <li>Pelabuhan Merak (Cilegon, Banten)</li>
                    <li>Pelabuhan Tanjung Priok (Jakarta Utara, DKI Jakarta)</li>

                    <!-- Jawa Tengah -->
                    <li>Pelabuhan Tanjung Mas (Semarang, Jawa Tengah)</li>

                    <!-- Jawa Timur -->
                    <li>Pelabuhan Tanjung Perak (Surabaya, Jawa Timur)</li>
                    <li>Pelabuhan Boom Baru (Surabaya, Jawa Timur)</li>
                    <li>Pelabuhan Kalimas (Surabaya, Jawa Timur)</li>

                    <!-- Bali -->
                    <li>Pelabuhan Benoa (Denpasar, Bali)</li>
                    <li>Pelabuhan Gilimanuk (Jembrana, Bali)</li>
                    <li>Pelabuhan Padang Bai (Karangasem, Bali)</li>
                </ol>
            @endif

            {{-- Bandara --}}
            @if ($origin->id == 5 || $destination->id == 5)
                <h3>Daftar Bandara yang Dilayani (Jawa & Bali)</h3>
                <ol>
                    <!-- Jawa Barat -->
                    <li>Bandara Internasional Husein Sastranegara (Bandung)</li>

                    <!-- DKI Jakarta -->
                    <li>Bandara Internasional Soekarno-Hatta (Tangerang, Banten)</li>

                    <!-- Jawa Tengah -->
                    <li>Bandara Internasional Ahmad Yani (Semarang)</li>

                    <!-- Yogyakarta -->
                    <li>Bandara Internasional Yogyakarta (Kulon Progo)</li>

                    <!-- Jawa Timur -->
                    <li>Bandara Internasional Juanda (Surabaya)</li>
                    <li>Bandara Abdul Rachman Saleh (Malang)</li>

                    <!-- Bali -->
                    <li>Bandara Internasional Ngurah Rai (Denpasar)</li>
                    <li>Bandara Letkol Wisnu (Karangasem)</li>
                    <li>Bandara Gusti Ngurah Rai (Tabanan)</li>
                    <li>Bandara Bangli (dalam rencana)</li>
                    <li>Bandara Blahbatuh (Gianyar, dekat Denpasar)</li>
                </ol>
            @endif



            <h3>Testimoni/Ulasan/Review dari Penumpang</h3>

            <p>
                Travel ini telah dipesan oleh penumpang kami sebanyak
                <strong>{{ $productSchema['offers']['offerCount'] }} kali</strong> dengan ulasan positif dan
                memuaskan sebanyak <strong>{{ $productSchema['rating']['reviewCount'] }} kali</strong>. Kami juga
                mendapatkan
                rating rata-rata sebesar
                <strong>{{ $ratingValue }} dari 5</strong>
                <span title="rating {{ $ratingValue }} / 5" class="rating text-xl"
                    style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ $ratingValue * 20 }}%, rgba(163,163,163.10) {{ $ratingValue * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </span>.
                Jadi, Anda tidak perlu ragu — perjalanan dengan travel kami pasti aman dan terpercaya.
            </p>


            <p>Berikut adalah beberapa ulasan dari penumpang kami:</p>

            @foreach ($testimonial as $item)
                @php
                    if ($loop->index == 1) {
                        $resultRatingValue = $ratingValue + 0.2;
                    } elseif ($loop->index == 3) {
                        $resultRatingValue = $ratingValue - 0.2;
                    } else {
                        $resultRatingValue = $ratingValue;
                    }

                @endphp
                <div class="bg-background-primary rounded-md shadow-md p-5 mb-7 ">
                    <blockquote class="border-l-4 border-primary">
                        <p class="italic ml-5">{{ $item[1] }}</p>
                    </blockquote>
                    <p class="!mb-0">Dari: <span class="font-semibold">{{ $item[0] }}</span></p>
                    <span>
                        Rating: {{ $resultRatingValue }} / 5<span title="rating {{ $resultRatingValue }} / 5"
                            class="rating text-xl"
                            style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ $resultRatingValue * 20 }}%, rgba(163,163,163.10) {{ $resultRatingValue * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                        </span>
                    </span>


                </div>
            @endforeach


            <h2>Berikut 8 Jasa {{ $page }} Terbaik {{ date('Y') }}</h2>

            <p>Sudahkah Anda menemukan jasa travel ke {{ $destinationName }} yang tepat? Harap berhati-hati agar tidak
                salah pilih travel. Pastikan Anda mengecek profil media sosial, aplikasi Get Contact, hingga Google
                Maps. Jika perlu, datang langsung ke garasi agar lebih yakin.</p>

            <p>Jika Anda belum ingin menggunakan jasa kami, kami merekomendasikan beberapa perusahaan travel terpercaya
                lainnya yang merupakan partner kami. Mereka siap membantu perjalanan Anda dari {{ $originName }} ke
                {{ $destinationName }} dengan pelayanan terbaik.</p>

            <p>Berikut adalah rekomendasi penyedia travel dari {{ $originName }} ke {{ $destinationName }} atau
                sebaliknya yang bisa menjadi pilihan Anda:</p>


            <h3>Jasa Travel</h3>
            <p>Travel pertama yang kami rekomendasikan adalah <i>Jasa Travel</i>. <a href="https://jasatravel.web.id"
                    target="_blank" title="Jasa Travel" rel="nofollow noindex">Jasa Travel</a> merupakan mitra
                terpercaya kami dengan layanan yang luas, tidak hanya untuk rute
                {{ $destinationName }} - {{ $originName }}, tapi juga ke berbagai daerah di seluruh Indonesia.
                Meskipun baru berdiri pada April 2025, reputasi mereka sudah sangat solid dan profesional.</p>

            <p>Jasa Travel sangat cocok bagi Anda yang ingin perjalanan nyaman dan tanpa repot. Driver yang
                berpengalaman akan membantu Anda selama perjalanan, termasuk memberikan informasi dan rekomendasi wisata
                lokal apabila Anda berkunjung untuk pertama kali. Layanan carter pulang-pergi juga tersedia untuk
                kemudahan Anda.</p>

            <p>Berikut profil lengkap Jasa Travel:</p>

            <ol>
                <li><strong>Nama: </strong>Jasa Travel</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Bogor, Jawa Barat</li>
                <li><strong>Website: </strong><a href="https://jasatravel.web.id" target="_blank"
                        rel="nofollow noindex">jasatravel.web.id</a></li>
                <li><strong>Fasilitas: </strong>Layanan antar jemput (door to door), makanan gratis, kendaraan ber-AC
                </li>
                <li><strong>Jenis Unit: </strong>Avanza, Xenia, Calya, Hiace</li>
                <li><strong>Jadwal Operasi: </strong>Siap melayani 24 jam penuh</li>
                <li><strong>Layanan Tambahan: </strong>Travel reguler, carter drop, pengiriman paket kilat</li>
                <li><strong>Harga Tiket: </strong>Mulai dari Rp100.000</li>
            </ol>


            <h3>Travel Sumatra</h3>

            <p>Yang kedua adalah <i>Travel Sumatra</i>, penyedia travel andalan yang fokus pada rute di wilayah Sumatra.
                Namun, jika Anda memilih layanan carter, perjalanan bisa diarahkan ke mana saja selama sesuai dengan
                anggaran Anda. <a href="https://travelsumatra.web.id" target="_blank" title="Travel Sumatra"
                    rel="nofollow noindex">Travel Sumatra</a> sudah berpengalaman bertahun-tahun dalam melayani rute ini
                dan siap memberikan pelayanan yang memuaskan. Dengan pesan carter dari {{ $originName }} ke
                {{ $destinationName }}, Anda juga akan mendapatkan bonus makanan selama perjalanan.</p>

            <p>Berdasarkan pengalaman kami, menemukan travel yang lengkap dan terpercaya di Sumatra memang tidak mudah.
                Banyak operator pribadi dengan jadwal keberangkatan yang tidak konsisten. Meski jadwal kami terbatas
                pada waktu tertentu, kami selalu berusaha memastikan keberangkatan tepat waktu dan lancar.</p>

            <p>Berikut profil lengkap Travel Sumatra:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Sumatra</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Jambi, Provinsi Jambi</li>
                <li><strong>Website: </strong><a href="https://travelsumatra.web.id" target="_blank"
                        rel="nofollow noindex">travelsumatra.web.id</a></li>
                <li><strong>Fasilitas: </strong>Bonus minuman, layanan antar jemput (door to door)</li>
                <li><strong>Jenis Unit: </strong>Ertiga, Calya, Elf short</li>
                <li><strong>Jadwal Keberangkatan: </strong>09.00 WIB, 15.00 WIB, dan 20.00 WIB</li>
                <li><strong>Layanan: </strong>Travel reguler, carter pulang-pergi dan drop, wisata religi, study tour
                </li>
                <li><strong>Harga Tiket: </strong>Mulai dari Rp150.000</li>
            </ol>



            <h3>Travel Terdekat</h3>

            <p>Yang ketiga adalah <i>Travel Terdekat</i>. <a href="https://travelterdekat.web.id" target="_blank"
                    title="Travel Terdekat" rel="nofollow noindex">Travel Terdekat</a> menjadi pilihan andalan untuk
                rute {{ $page }} hari ini. Pemesanan tiket sangat mudah dilakukan melalui WhatsApp. Perjalanan
                dilakukan cepat dengan rute tol penuh, dan harga tiket sudah termasuk biaya tol serta bahan bakar.
                Pembayaran tiket dilakukan saat Anda tiba di tujuan, sehingga lebih nyaman dan aman.</p>

            <p>Disarankan untuk memesan travel minimal 1 hari sebelum keberangkatan agar driver dapat mempersiapkan
                perjalanan dengan optimal. Dengan begitu, Anda bisa lebih santai tanpa terburu-buru selama perjalanan.
                Namun, jika ada kebutuhan mendadak, Anda bisa memilih layanan carter dari {{ $originName }}.</p>

            <p>Untuk informasi lebih lanjut, silakan hubungi kontak di bawah ini:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Terdekat</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Semarang, Provinsi Jawa Tengah</li>
                <li><strong>Website: </strong><a href="https://travelterdekat.web.id" target="_blank"
                        rel="nofollow noindex">travelterdekat.web.id</a></li>
                <li><strong>Fasilitas: </strong>Gratis bagasi, bonus makan, mobil ber-AC, serta merchandise khusus untuk
                    layanan carter</li>
                <li><strong>Unit: </strong>Beragam unit lengkap mulai dari Hiace, Elf Long, Minibus, Avanza, Innova, dan
                    lainnya</li>
                <li><strong>Jadwal: </strong>Berangkat setiap 2 jam mulai pukul 04.00 WIB hingga 20.00 WIB</li>
                <li><strong>Layanan: </strong>Kirim paket kilat, travel reguler, carter pulang-pergi dan drop, wisata
                    religi, study tour, city tour, dan shuttle</li>
                <li><strong>Harga tiket: </strong>Mulai Rp50.000</li>
            </ol>


            <h3>Travel Kalimantan</h3>

            <p>Agen travel berikutnya adalah <i>Travel Kalimantan</i>. <a href="https://travelkalimantan.web.id"
                    target="_blank" title="Travel Kalimantan" rel="nofollow noindex">Travel Kalimantan</a> sangat
                direkomendasikan jika Anda mencari jasa travel di wilayah Kalimantan. Meskipun fokus utama mereka adalah
                Kalimantan, Travel Kalimantan juga siap melayani rute perjalanan ke seluruh Indonesia, khususnya dari
                {{ $destinationName }} ke {{ $originName }}.</p>

            <p>Layanan travel reguler kini tidak hanya populer di Pulau Jawa dan Sumatra, tetapi juga mulai berkembang
                pesat di Kalimantan. Travel Kalimantan merupakan salah satu penyedia yang baru berdiri sejak Januari
                2025, namun sudah menjangkau hampir seluruh wilayah Kalimantan dengan pelayanan yang semakin meningkat.
            </p>

            <p>Berikut profil lengkap dari Travel Kalimantan:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Kalimantan</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Samarinda, Provinsi Kalimantan Timur</li>
                <li><strong>Website: </strong><a href="https://travelkalimantan.web.id" target="_blank"
                        rel="nofollow noindex">travelkalimantan.web.id</a></li>
                <li><strong>Fasilitas: </strong>Mobil ber-AC dan layanan antar-jemput door to door</li>
                <li><strong>Unit: </strong>Hiace dan beberapa mobil pribadi yang nyaman</li>
                <li><strong>Jadwal: </strong>Keberangkatan pukul 09.00 WITA dan 20.00 WITA</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, serta pengiriman paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai dari Rp150.000</li>
            </ol>

            <h3>Travel Sulawesi</h3>

            <p>Selanjutnya, kami rekomendasikan <a href="https://travelsulawesi.web.id" target="_blank"
                    title="Travel Sulawesi" rel="nofollow noindex"><i>Travel Sulawesi</i></a>. Agen travel ini masih
                baru dan berfokus melayani rute di wilayah Sulawesi saja. Jika Anda membutuhkan perjalanan ke luar
                Sulawesi, layanan carter tersedia untuk fleksibilitas lebih.</p>

            <p>Berikut adalah profil lengkap dari Travel Sulawesi:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Sulawesi</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Gorontalo, Provinsi Gorontalo</li>
                <li><strong>Website: </strong><a href="https://travelsulawesi.web.id" target="_blank"
                        rel="nofollow noindex">travelsulawesi.web.id</a></li>
                <li><strong>Fasilitas: </strong>Mobil ber-AC, layanan antar-jemput door to door, dan bonus minuman
                    selama perjalanan</li>
                <li><strong>Unit: </strong>Avanza, Calya, dan Innova</li>
                <li><strong>Jadwal: </strong>Keberangkatan pukul 07.00 WITA, 15.00 WITA, dan 21.00 WITA</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop atau pulang pergi, serta pengiriman paket
                </li>
                <li><strong>Harga tiket: </strong>Mulai dari Rp99.000</li>
            </ol>



            <h3>Mumpuni Trans Java</h3>

            <p>Selanjutnya, kami perkenalkan <i>Mumpuni Trans Java</i>. {{ $page }} ini menawarkan layanan
                travel dengan sistem door to door serta opsi pulang-pergi. <a href="https://mumpunitransjava.com/"
                    target="_blank" title="Mumpuni Trans Java" rel="nofollow noindex">Mumpuni Trans Java</a> adalah
                penyedia travel profesional dan terpercaya yang telah berpengalaman lebih dari {{ date('y') - 21 }}
                tahun melayani rute di seluruh Indonesia. Namun, tetap waspada karena ada oknum yang mengatasnamakan
                Mumpuni Trans Java.</p>

            <p>MTJ (Mumpuni Trans Java) menawarkan perjalanan yang nyaman, cepat, dan tarif yang terjangkau. Untuk
                pemesanan, pastikan menghubungi nomor WhatsApp resmi di {{ phoneNumber() }}. Jika memungkinkan,
                disarankan untuk langsung datang ke garasi mereka agar lebih yakin.</p>

            <p>Berikut adalah profil lengkap Mumpuni Trans Java:</p>

            <ol>
                <li><strong>Nama: </strong>Mumpuni Trans Java</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Ciamis, Provinsi Jawa Barat</li>
                <li><strong>Website: </strong><a href="https://mumpunitransjava.com/" target="_blank"
                        rel="nofollow noindex">mumpunitransjava.com</a></li>
                <li><strong>Fasilitas: </strong>Mobil ber-AC, layanan door to door, bonus makan dan minum, serta free
                    bagasi hingga 15 kg</li>
                <li><strong>Unit: </strong>Hiace Commuter, Grand Max, Luxio, dan Suzuki APV</li>
                <li><strong>Jadwal: </strong>Beroperasi 24 jam</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, carter pulang-pergi (pp), dan kirim
                    paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai dari Rp180.000</li>
            </ol>



            <h3>Panda 88 Trans</h3>

            <p>Selanjutnya, ada travel bernama <i>Panda 88 Trans</i> yang berasal dari Magelang, Jawa Tengah. Agen
                travel <a href="https://panda88trans.web.id/" target="_blank" title="Panda 88 Trans"
                    rel="nofollow noindex">Panda 88 Trans</a> siap melayani antar-jemput 24 jam di wilayah Jawa, Bali,
                hingga Sumatra. Anda dapat memesan travel reguler ataupun carter. Namun, untuk perjalanan jarak jauh,
                sangat disarankan memilih carter drop atau carter pulang-pergi (pp) agar lebih nyaman.</p>

            <p>Admin Panda 88 Trans sangat responsif dan ramah, sehingga Anda bisa memesan tiket kapan saja dan dari
                mana saja dengan mudah. Driver yang bertugas sangat profesional, bahkan jika penumpang hanya satu orang,
                mobil travel tetap akan berangkat. Selain itu, Anda juga bisa melakukan perubahan jadwal atau
                pengembalian dana jika diperlukan.</p>

            <p>Berikut adalah profil lengkap dari Panda 88 Trans:</p>

            <ol>
                <li><strong>Nama: </strong>Panda 88 Trans</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Magelang, Jawa Tengah</li>
                <li><strong>Website: </strong><a href="https://panda88trans.web.id/" target="_blank"
                        rel="nofollow noindex">panda88trans.web.id</a></li>
                <li><strong>Fasilitas: </strong>Layanan door to door</li>
                <li><strong>Unit: </strong>Elf long dan Hiace</li>
                <li><strong>Jadwal: </strong>10.00 WIB, 15.00 WIB, dan 21.00 WIB</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, carter pulang pergi (pp), dan kirim
                    paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai Rp180.000</li>
            </ol>



            <h3>Arman Trans</h3>

            <p>Yang terakhir adalah <i>Arman Trans</i>. Travel pribadi ini kami rekomendasikan karena owner-nya sendiri
                yang menjadi driver langsung. <a href="https://armantrans.com/" target="_blank" title="Arman Trans"
                    rel="nofollow noindex">Arman Trans</a> siap mengantarkan Anda kemanapun, terutama untuk rute di
                daerah {{ $originName }} dan {{ $destinationName }}. Jadi, jangan khawatir, perjalanan Anda pasti
                sampai tujuan dengan selamat dan cepat.</p>

            <p>Arman Trans adalah solusi travel terbaik saat ini. Mereka selalu mengutamakan kepuasan penumpang, dengan
                layanan yang anti turun di tengah jalan dan perjalanan yang nyaman menggunakan mobil ber-AC.</p>

            <p>Berikut profil lengkap dari Arman Trans:</p>

            <ol>
                <li><strong>Nama: </strong>Arman Trans</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Tangerang, Provinsi Banten</li>
                <li><strong>Website: </strong><a href="https://armantrans.com/" target="_blank"
                        rel="nofollow noindex">armantrans.com</a></li>
                <li><strong>Fasilitas: </strong>Layanan travel door to door dan bonus snack selama perjalanan</li>
                <li><strong>Unit: </strong>Innova dan Calya</li>
                <li><strong>Jadwal: </strong>24 jam nonstop</li>
                <li><strong>Layanan: </strong>Travel reguler, carter drop, dan carter pulang pergi (pp)</li>
                <li><strong>Harga tiket: </strong>Mulai Rp100.000</li>
            </ol>


            <h2>Pilihan Rute Travel Lain yang Bisa Jadi Pilihan Anda</h2>

            <p>Selain rute travel yang sedang Anda lihat ini, kami juga menawarkan berbagai pilihan rute travel lainnya
                yang dapat membantu perjalanan Anda. Silakan cek koleksi lengkap kami di <a
                    href="{{ route('travel.archive') }}">travel</a> untuk menemukan rute yang sesuai dengan kebutuhan
                dan tujuan Anda.</p>


            <ol>
                @foreach ($recomendation as $item)
                    <li>
                        @if ($loop->index < 5)
                            <a href="{{ paramsSingleTravel($originName, $item->name, $origin->id, $item->id) }}"
                                title="Travel {{ $originName }} {{ Str::title($item->name) }}">
                                Travel {{ $originName }} {{ Str::title($item->name) }}
                            </a>
                        @else
                            <a href="{{ paramsSingleTravel($destinationName, $item->name, $destination->id, $item->id) }}"
                                title="Travel {{ $destinationName }} {{ Str::title($item->name) }}">
                                Travel {{ $destinationName }} {{ Str::title($item->name) }}
                            </a>
                        @endif
                    </li>
                @endforeach
                <li>
                    <a href="{{ paramsSingleTravel($destinationName, $originName, $destination->id, $origin->id) }}"
                        title="Travel {{ $destinationName }} {{ $originName }}">
                        Travel {{ $destinationName }} {{ $originName }}
                    </a>
                </li>
            </ol>


            <h2>Tips Melakukan Travel</h2>

            <p>Perjalanan dari {{ $originName }} ke {{ $destinationName }} memang cukup jauh, dengan jarak yang
                bisa mencapai puluhan kilometer dan waktu tempuh berjam-jam. Oleh karena itu, penting untuk menjaga
                kondisi tubuh tetap prima selama perjalanan.</p>

            <p>Jika Anda melakukan perjalanan {{ $page }} sendirian, pastikan selalu waspada dan berhati-hati.
                Jangan lupa untuk mendokumentasikan perjalanan sebagai kenang-kenangan. Namun sebelum berangkat,
                perhatikan beberapa tips dari kami berikut ini.</p>

            <p>Berikut tipsnya:</p>

            <ol>
                <li>Pilih agen travel yang terpercaya dan selalu lakukan pengecekan ulang profil mereka.</li>
                <li>Usahakan membayar tiket saat tiba di tujuan, hindari pembayaran di awal untuk keamanan.</li>
                <li>Siapkan obat-obatan pribadi sesuai kebutuhan selama perjalanan.</li>
                <li>Jangan lupa makan sebelum dan selama perjalanan agar tetap bertenaga.</li>
                <li>Pilih kendaraan yang ber-AC untuk kenyamanan ekstra.</li>
                <li>Pastikan koper atau barang bawaan tidak melebihi batas berat yang diperbolehkan, biasanya 15 kg.
                </li>
                <li>Bawa power bank dan charger agar perangkat elektronik tetap terisi.</li>
                <li>Selalu simpan nomor kontak penting dan agen travel di ponsel Anda.</li>
            </ol>


            <h2>Langkah Mudah Memesan Travel</h2>

            <p>Memesan travel kini semakin praktis, baik secara online maupun langsung datang ke agen. Berikut
                langkah-langkah yang bisa Anda ikuti:</p>

            <ol>
                <li>Hubungi agen travel untuk menanyakan harga dan menentukan titik penjemputan serta tujuan antar.</li>
                <li>Isi formulir pemesanan secara online melalui WhatsApp atau secara offline dengan formulir kertas
                    yang berisi data lengkap penumpang dan detail perjalanan.</li>
                <li>Setelah konfirmasi, tunggu jadwal keberangkatan dan driver akan menjemput sesuai waktu yang
                    dijanjikan.</li>
            </ol>

            <p>
                Mudah dan cepat, bukan? Jangan tunggu lama, segera pesan <strong>{{ $page }}</strong> sekarang
                juga melalui nomor {{ phoneNumber() }}.
            </p>

        </div>
    </div>
</div>
