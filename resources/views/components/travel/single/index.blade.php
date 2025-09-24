@php
    $originName = Str::title($origin->name);
    $destinationName = Str::title($destination->name);

    $ratingValue = $productSchema['rating']['ratingValue'];
    $testimonial = [
        [developer()->name, $productSchema['reviewBody']],
        [
            'Agus Ferdinand',
            'Perjalanan Travel ' .
            $destinationName .
            ' ' .
            $originName .
            ' sangat memuaskan, berangkatnya tepat waktu dan driver jemput saya langsung dari rumah.',
        ],
        [
            'Karina',
            'Saya telah pesan carter drop dari ' .
            $originName .
            ' ke ' .
            $destinationName .
            '. Sangat rekomendasi, walaupun mendadak tetap dilayani dengan sat set sat set.',
        ],
        [
            'Sinta Rona',
            'Driver travel ' .
            $destinationName .
            ' sangat profesional dan berpengalaman. Kami dibantu sampai tujuan dan diantar ke tempat wisata yang kami inginkan. Selama perjalanan juga kami mendapatkan bonus makan dan minum.',
        ],
    ];

    $gallery = [
        [asset('images/gallery/1.jpg'), 'Mobil ertiga'],
        [asset('images/gallery/3.jpg'), 'Mobil ' . $page],
        [asset('images/gallery/7.jpg'), 'Mobil Travel ' . $destinationName . ' ' . $originName],
        [asset('images/gallery/11.jpg'), 'Galeri Mobil travel'],
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
            <p>Pesan <strong class="!font-normal">{{ $page }} sekarang juga!</strong></p>

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
                <a class="italic" href="{{ route('home') }}">{{ web()->title }}</a> adalah penyedia
                {{ web()->tagline }} terutama rute
                <a title="{{ $page }}"
                    href="{{ paramsSingleTravel($originName, $destinationName, $origin->id, $destination->id) }}"><strong>{{ $page }}</strong></a>.
                Tapi tidak
                hanya terbatas pada rute travel itu saja. Kami melayani travel di
                seluruh daerah di Indonesia. Kami fokus pada daerah {{ $originName }} dan daerah
                {{ $destinationName }}.
            </p>

            <p>
                Bagi sebagian orang, travel adalah solusi transportasi yang hemat dan cepat. Kenapa tidak? Travel
                {{ $originName }} ini dapat mengantarkan anda kemana saja dan kapan saja dengan melalui tol penuh
                jika ada aksesnya. Harga yang ditawarkan juga sangat murah, bahkan anda bisa menegosiasikan harga jika
                akomodasi tidak cukup.
            </p>

            <p>
                Jarak dari {{ $originName }} ke {{ $destinationName }} sedang, tidak terlalu jauh dan tidak terlalu
                dekat. Jika anda ingin bepergian dari {{ $originName }} ke {{ $destinationName }} atau sebaliknya
                dari {{ $destinationName }} ke {{ $originName }} maka disarankan menggunakan jasa travel dari kami.
            </p>

            <h2>Info {{ $page }} {{ date('Y') }}</h2>

            <p>
                Travel dari {{ $originName }} ke {{ $destinationName }} atau sebaliknya sangat diperuntukan bagi
                orang-orang yang ingin bepergian dengan aman, nyaman, dan praktis. Karena dengan menggunakan travel
                {{ $originName }} anda akan dijemput dari rumah
                langsung dan diantar ke lokasi yang anda inginkan. Intinya sesuai titik yang dilampirkan pada formulir
                pemesanan.
            </p>

            <p>
                Di daerah {{ $originName }} terdapat banyak penyedia jasa travel yang menawarkan sistem door to door.
                Namun anda harus hati-hati memilih karena banyak juga yang menjadikan ini sebagai modus penipuan. Oleh
                karena itu kami hadir untuk membantu anda melakukan perjalanan travel ke {{ $destinationName }}.
            </p>

            <h3>Jadwal Keberangkatan Travel</h3>

            <p>
                Kami selalu memberikan pelayanan travel {{ $destinationName }} semaksimal mungkin, salah satunya dengan
                jadwal Keberangkatan yang fleksibel.
                Untuk rute <strong>{{ $page }}</strong> kami siap membantu 24 jam penuh. Bahkan jika anda ingin
                berangkat tengah
                malam kami siap
                membantu anda.
            </p>

            <p>
                Perjalanan dari {{ $originName }} ke {{ $destinationName }} hari ini, pada jam:
            </p>

            <ol>
                <li>
                    Pukul 06.00
                </li>
                <li>
                    Pukul 10.00
                </li>
                <li>
                    Pukul 13.00
                </li>
                <li>
                    Pukul 15.00
                </li>
                <li>
                    Pukul 21.00
                </li>
            </ol>

            <p>
                Sedangkan perjalanan dari {{ $destinationName }} ke {{ $originName }} hari ini, pada Pukul jam.
            </p>

            <ol>
                <li>
                    Pukul 09.00
                </li>
                <li>
                    Pukul 15.00
                </li>
                <li>
                    Pukul 19.00
                </li>
                <li>
                    Pukul 21.00
                </li>
                <li>
                    Pukul 23.00
                </li>
            </ol>

            <p>
                Jadwal tersebut suatu waktu dapat berubah menyesuaikan situasi dan kondisi driver. Untuk lebih lanjut
                bisa hubungi admin dan tanyakan terkait jadwal keberangkatan.
            </p>

            <h3>Harga Tiket Travel</h3>

            <p>Harga travel yang kami tawarkan cukup terjangkau. Bahkan anda bisa negosiasikan kepada admin kami jika
                kurang cocok! Bahkan sudah ada sekitar <strong>{{ $productSchema['offers']['offerCount'] }}
                    orang</strong>
                yang menawar travel ini. Untuk penawaran harga <strong>{{ $page }}</strong> mulai dari
                <strong class="text-primary">{{ rupiah($productSchema['offers']['lowPrice']) }}</strong> hingga
                <strong class="text-primary">{{ rupiah($productSchema['offers']['highPrice']) }}</strong>. Harga
                tersebut sudah termasuk
                akses tol, bbm, dan makan 1 kali.
            </p>

            <p>
                Harga tiket travel {{ $destinationName }} juga sewaktu-waktu dapat berubah. Karena harga akan
                menyesuaikan titik lokasi,
                semakin pelosok maka harga akan semakin naik sedikit. Tapi jangan khawatir pasti masih terjangkau. Jadi
                sebelum isi formulir pemesanan, sebaiknya konsultasi dulu kepada admin kami.
            </p>


            <h3>Kelebihan Travel Kami</h3>

            <p>Dibanding dengan jasa travel {{ $page }} lainnya, {{ web()->title }} adalah penyedia jasa
                travel dan carter
                terbaik No. 1. Tidak perlu diragukan lagi, jika ragu maka sebaiknya datang ke garasi kami yang berada di
                {{ address()->streetAddress }}.</p>

            <p>Berikut kelebihan kami dibanding travel lain:</p>

            <ol>
                <li>Harga travel terjangkau dan bisa negosiasi</li>
                <li>Sopir berpengalaman dan berasal dari {{ $destinationName }}</li>
                <li>Sistem door to door/antar jemput dari rumah</li>
                <li>Menjangkau seluruh pelosok</li>
                <li>Keberangkatan selalu ontime</li>
                <li>Berangkat setiap hari dan setiap jam</li>
                <li>Pemesanan mudah bisa via online</li>
                <li>Bayar ketika tiba di lokasi (tidak disarankan membayar dp)</li>
                <li>Banyak promo dan diskon tersedia</li>
                <li>Bonus makan dan minum</li>
                <li>Banyak pilihan mobil</li>
                <li>Semua mobil nyaman dan dilengkapi fasilitas ac</li>
            </ol>

            <h3>Pilihan Mobil/Armada/Unit yang Tersedia </h3>

            <p>Terdapat banyak pilihan mobil/armada/unit yang tersedia. Semua mobil dijamin bersih dan nyaman serta
                dilengkapi fasilitas ac. Berikut daftar mobil yang kami pakai untuk travel, carter, maupun ziarah:</p>

            <ol>
                <li>HiAce</li>
                <li>Isuzu Elf (Short & Long)</li>
                <li>Hiace</li>
                <li>Ertiga</li>
                <li>Mitsubishi L300</li>
                <li>Avanza</li>
                <li>Calya</li>
                <li>Daihatsu Xenia</li>
                <li>Suzuki APV</li>
                <li>Innova (Reborn & Zenix)</li>
                <li>Mitsubishi Xpander</li>
                <li>Daihatsu Luxio</li>
                <li>Nissan Livina</li>
                <li>Hyundai H-1</li>
                <li>KIA Pregio</li>
                <li>Mazda Biante</li>
            </ol>


            <div class="grid grid-cols-2 gap-5 mb-5">
                @foreach ($gallery as $item)
                    <img class="aspect-video object-cover rounded-md shadow-md border-b-8 border-primary w-full h-auto brightness-75 hover:brightness-90"
                        src="{{ $item[0] }}" title="{{ $item[1] }}" alt="{{ $item[1] }}">
                @endforeach
            </div>

            {{-- Halte --}}
            @if ($origin->id == 1 || $destination->id == 1)
                <h3>Daftar Halte yang Dilayani</h3>
                <ol>
                    <!-- Jakarta -->
                    <li>Halte Bundaran HI (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Halte Harmoni Central Busway (Jakarta Barat, DKI Jakarta)</li>
                    <li>Halte Blok M (Jakarta Selatan, DKI Jakarta)</li>
                    <li>Halte Senayan JCC (Jakarta Selatan, DKI Jakarta)</li>
                    <li>Halte Kota (Jakarta Barat, DKI Jakarta)</li>

                    <!-- Bandung -->
                    <li>Halte Leuwi Panjang (Bandung, Jawa Barat)</li>
                    <li>Halte Cicaheum (Bandung, Jawa Barat)</li>

                    <!-- Surabaya -->
                    <li>Halte Joyoboyo (Surabaya, Jawa Timur)</li>
                    <li>Halte Bungurasih (Surabaya, Jawa Timur)</li>

                    <!-- Medan -->
                    <li>Halte Terminal Amplas (Medan, Sumatera Utara)</li>
                    <li>Halte Pasar 5 (Medan, Sumatera Utara)</li>

                    <!-- Denpasar -->
                    <li>Halte Renon (Denpasar, Bali)</li>
                </ol>
            @endif

            {{-- Terminal --}}
            @if ($origin->id == 2 || $destination->id == 2)
                <h3>Daftar Terminal yang Dilayani</h3>
                <ol>
                    <!-- Sumatra -->
                    <li>Terminal Amplas (Medan, Sumatera Utara)</li>
                    <li>Terminal Pinang Baris (Palembang, Sumatera Selatan)</li>
                    <li>Terminal Rajabasa (Bandar Lampung, Lampung)</li>
                    <li>Terminal Pasar Baru (Jambi, Jambi)</li>
                    <li>Terminal Angkutan Kota (Bengkulu, Bengkulu)</li>

                    <!-- Jawa -->
                    <li>Terminal Pulogebang (Jakarta Timur, DKI Jakarta)</li>
                    <li>Terminal Kampung Rambutan (Jakarta Timur, DKI Jakarta)</li>
                    <li>Terminal Giwangan (Yogyakarta, DIY)</li>
                    <li>Terminal Purabaya (Surabaya, Jawa Timur)</li>
                    <li>Terminal Baranangsiang (Bogor, Jawa Barat)</li>

                    <!-- Bali -->
                    <li>Terminal Mengwi (Badung, Bali)</li>
                    <li>Terminal Ubung (Denpasar, Bali)</li>

                    <!-- Kalimantan -->
                    <li>Terminal Pal 6 (Pontianak, Kalimantan Barat)</li>
                    <li>Terminal Induk Batu Licin (Tanah Bumbu, Kalimantan Selatan)</li>
                    <li>Terminal Batu Ampar (Balikpapan, Kalimantan Timur)</li>

                    <!-- Sulawesi -->
                    <li>Terminal Maloku (Makassar, Sulawesi Selatan)</li>
                    <li>Terminal Duyu (Manado, Sulawesi Utara)</li>
                    <li>Terminal Mandonga (Kendari, Sulawesi Tenggara)</li>

                    <!-- Papua -->
                    <li>Terminal Jayapura (Jayapura, Papua)</li>
                </ol>
            @endif

            {{-- Stasiun --}}
            @if ($origin->id == 3 || $destination->id == 3)
                <h3>Daftar Stasiun yang Dilayani</h3>
                <ol>
                    <!-- Sumatra -->
                    <li>Stasiun Medan (Medan, Sumatera Utara)</li>
                    <li>Stasiun Tanjung Karang (Bandar Lampung, Lampung)</li>
                    <li>Stasiun Tebing Tinggi (Tebing Tinggi, Sumatera Utara)</li>
                    <li>Stasiun Lubuk Pakam (Deli Serdang, Sumatera Utara)</li>
                    <li>Stasiun Kertapati (Palembang, Sumatera Selatan)</li>

                    <!-- Jawa -->
                    <li>Stasiun Gambir (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Stasiun Pasar Senen (Jakarta Pusat, DKI Jakarta)</li>
                    <li>Stasiun Surabaya Gubeng (Surabaya, Jawa Timur)</li>
                    <li>Stasiun Yogyakarta (Yogyakarta, DIY)</li>
                    <li>Stasiun Bandung (Bandung, Jawa Barat)</li>

                    <!-- Bali -->
                    <li>Tidak ada stasiun kereta api di Bali</li>

                    <!-- Kalimantan -->
                    <li>Tidak ada stasiun kereta api di Kalimantan (kecuali proyek kereta ringan atau rencana)</li>

                    <!-- Sulawesi -->
                    <li>Tidak ada stasiun kereta api di Sulawesi</li>

                    <!-- Papua -->
                    <li>Tidak ada stasiun kereta api di Papua</li>
                </ol>
            @endif

            {{-- Pelabuhan --}}
            @if ($origin->id == 4 || $destination->id == 4)
                <h3>Daftar Pelabuhan yang Dilayani</h3>
                <ol>
                    <!-- Sumatra -->
                    <li>Pelabuhan Belawan (Medan, Sumatera Utara)</li>
                    <li>Pelabuhan Boom Baru (Palembang, Sumatera Selatan)</li>
                    <li>Pelabuhan Panjang (Bandar Lampung, Lampung)</li>
                    <li>Pelabuhan Tanjung Api-Api (Banyuasin, Sumatera Selatan)</li>
                    <li>Pelabuhan Teluk Bayur (Padang, Sumatera Barat)</li>

                    <!-- Jawa -->
                    <li>Pelabuhan Tanjung Priok (Jakarta Utara, DKI Jakarta)</li>
                    <li>Pelabuhan Tanjung Perak (Surabaya, Jawa Timur)</li>
                    <li>Pelabuhan Tanjung Mas (Semarang, Jawa Tengah)</li>
                    <li>Pelabuhan Panjang (Lampung, Lampung - terkait akses Jawa)</li>
                    <li>Pelabuhan Merak (Cilegon, Banten)</li>

                    <!-- Bali -->
                    <li>Pelabuhan Benoa (Denpasar, Bali)</li>
                    <li>Pelabuhan Gilimanuk (Jembrana, Bali)</li>

                    <!-- Kalimantan -->
                    <li>Pelabuhan Trisakti (Banjarmasin, Kalimantan Selatan)</li>
                    <li>Pelabuhan Pontianak (Pontianak, Kalimantan Barat)</li>
                    <li>Pelabuhan Balikpapan (Balikpapan, Kalimantan Timur)</li>

                    <!-- Sulawesi -->
                    <li>Pelabuhan Makassar (Makassar, Sulawesi Selatan)</li>
                    <li>Pelabuhan Bitung (Bitung, Sulawesi Utara)</li>
                    <li>Pelabuhan Palu (Palu, Sulawesi Tengah)</li>

                    <!-- Papua -->
                    <li>Pelabuhan Jayapura (Jayapura, Papua)</li>
                    <li>Pelabuhan Sorong (Sorong, Papua Barat)</li>
                </ol>
            @endif

            {{-- Bandara --}}
            @if ($origin->id == 5 || $destination->id == 5)
                <h3>Daftar Bandara yang Dilayani</h3>
                <ol>
                    <li>Bandara Internasional Kualanamu (Medan)</li>
                    <li>Bandara Sultan Mahmud Badaruddin II (Palembang)</li>
                    <li>Bandara Fatmawati Soekarno (Bengkulu)</li>
                    <li>Bandara Internasional Minangkabau (Padang)</li>
                    <li>Bandara Sultan Thaha Syaifuddin (Jambi)</li>

                    <li>Bandara Internasional Soekarno-Hatta (Jakarta)</li>
                    <li>Bandara Internasional Juanda (Surabaya)</li>
                    <li>Bandara Internasional Yogyakarta (Yogyakarta)</li>
                    <li>Bandara Internasional Husein Sastranegara (Bandung)</li>
                    <li>Bandara Internasional Ahmad Yani (Semarang)</li>

                    <li>Bandara Internasional Ngurah Rai (Denpasar)</li>
                    <li>Bandara Letkol Wisnu (Karangasem)</li>
                    <li>Bandara Gusti Ngurah Rai (Tabanan)</li>
                    <li>Bandara Bangli - dalam rencana/sekunder (Bangli)</li>
                    <li>Tidak ada bandara besar, tapi dekat Denpasar (Gianyar)</li>

                    <li>Bandara Supadio (Pontianak)</li>
                    <li>Bandara Internasional Syamsudin Noor (Banjarmasin)</li>
                    <li>Bandara Aji Pangeran Tumenggung Pranoto (Samarinda)</li>
                    <li>Bandara Mutiara SIS Al-Jufri (Palu)</li>
                    <li>Bandara Sultan Aji Muhammad Sulaiman Sepinggan (Balikpapan)</li>

                    <li>Bandara Internasional Sultan Hasanuddin (Makassar)</li>
                    <li>Bandara Internasional Sam Ratulangi (Manado)</li>
                    <li>Bandara Mutiara SIS Al-Jufri (Palu)</li>
                    <li>Bandara Jalaluddin (Gorontalo)</li>
                    <li>Bandara Haluoleo (Kendari)</li>

                    <li>Bandara Internasional Sentani (Jayapura)</li>
                    <li>Bandara Mozes Kilangin (Timika)</li>
                    <li>Bandara Frans Kaisiepo (Biak)</li>
                    <li>Bandara Wamena (Wamena)</li>
                    <li>Bandara Kaimana (Kaimana)</li>
                </ol>
            @endif


            <h3>Testimoni/Ulasan/Review dari Penumpang</h3>

            <p>
                Travel ini telah dibeli oleh para penumpang kami sebanyak
                <strong>{{ $productSchema['offers']['offerCount'] + 20 }} kali </strong> dengan review positif dan
                memuaskan sebanyak <strong>{{ $productSchema['rating']['reviewCount'] }} kali</strong>. Dan mendapatkan
                rating rata-rata sebesar
                <strong>{{ $ratingValue }} dari
                    5</strong>
                <span title="rating {{ $ratingValue }} / 5" class="rating text-xl"
                    style="  background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ $ratingValue * 20 }}%, rgba(163,163,163.10) {{ $ratingValue * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </span>.
                Jadi jangan khawatir, perjalanan travel pasti aman dan amanah.
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
                            style="  background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ $resultRatingValue * 20 }}%, rgba(163,163,163.10) {{ $resultRatingValue * 20 }}%, rgba(163,163,163.10) 100%);
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


            <h2>8 Penyedia {{ $page }} Terbaik</h2>

            <p>Apakah anda sudah menemukan jasa travel ke {{ $destinationName }}? Harap berhati-hati jangan sampai anda
                salah memilih travel. Pastikan anda cek profil sosmed, Aplikasi Get Contact, hingga google mapnya. Jika
                perlu
                datang langsung ke garasi untuk meyakinkan diri anda.</p>

            <p>Jika anda tidak mau menggunakan jasa dari kami, maka kami akan menyarankan perusahaan travel lain yang
                akan membantu perjalanan anda dari {{ $originName }} ke {{ $destinationName }}. Mereka ini adalah
                partner kami dalam bidang transportasi. Siap membantu dengan pelayanan terbaik.</p>

            <p>Berikut rekomendasi penyedia travel <strong>{{ $page }}</strong> yang mungkin anda
                suka:</p>

            <h3>Jasa Travel</h3>

            <p>Nama agen travel {{ $page }} pertama adalah <i>Jasa Travel</i>. <a
                    href="https://jasatravel.web.id" target="_blank" title="Jasa Travel" rel="nofollow noindex">Jasa
                    Travel</a> adalah parter travel terbaik kami. Selain
                rute
                {{ $destinationName }} - {{ $originName }}, mereka juga melayani rute yang lengkap di seluruh
                Indonesia. Travel ini dibentuk pada April 2025, namun meskipun masih baru, ini adalah jasa travel
                terbaik yang pernah bekerja sama dengan kami!</p>

            <p>Travel {{ $originName }} atau Travel {{ $destinationName }} yang ditawarkan sangat cocok untuk anda
                jika perli jalan-jalan sendiri.
                Driver akan memberikan arahan untuk hal yang harus anda lakukan setelah sampai di titik lokasi. Jika
                anda
                baru pertama kali ke daerah itu, driver kami akan memberikan rekomendasi tempat wisata terbaik. Bahkan
                anda bisa memesan carter pp (pulang pergi) sekalian.</p>

            <p>Berikut detail profil Jasa Travel:</p>

            <ol>
                <li><strong>Nama: </strong>Jasa Travel</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Bogor, Provinsi Jawa Barat</li>
                <li><strong>Website: </strong>https://jasatravel.web.id/</li>
                <li><strong>Fasilitas: </strong>Door to door, bonus makan, dan mobil ber-ac</li>
                <li><strong>Unit: </strong>Avanza, Xenia, Calya, Hiace</li>
                <li><strong>Jadwal: </strong>Keberangkatan 24 jam</li>
                <li><strong>Layanan: </strong>Travel reguler, Carter drop, Kirim paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai Rp100.000</li>
            </ol>

            <h3>Travel Sumatra</h3>

            <p>Yang kedua adalah <i>Travel Sumatra</i>, menjadi penyedia travel terbaik namun berfokus pada daerah
                Sumatra saja. Tapi tidak
                terbatas disitu jika anda memesan carter. Dengan menggunakan carter anda bisa diantar kemana saja selagi
                budget cocok. <a href="https://travelsumatra.web.id" target="_blank" title="Travel Sumatra"
                    rel="nofollow noindex">Travel Sumatra</a> telah berpengalaman bertahun tahun untuk rute ini. Anda
                akan mendapatkan pelayanan luar biasa dari mereka. Pesan travel carter
                {{ $destinationName }} {{ $originName }} bersama mereka, anda akan mendapatkan bonsu makan selama
                perjalanan.</p>

            <p>Berdasarkan pengalaman kami, sangat sulit mendapatkan travel yang lengkap dari Sumatra. Banyak travel
                pribadi dan jadwal keberangkatan yang kurang jelas. Meskipun kami berangkat hanya pada jam tertentu,
                kami tetap positif berangkat.</p>

            <p>Berikut info detail profil Travel Sumatra:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Sumatra</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota jambi, Provinsi Jambi</li>
                <li><strong>Website: </strong>https://travelsumatra.web.id</li>
                <li><strong>Fasilitas: </strong>Bonus minum dan door to door</li>
                <li><strong>Unit: </strong>Ertiga, Calya, dan Elf short</li>
                <li><strong>Jadwal: </strong>09.00 WIB, 15.00 WIB, dan 20.00 WIB</li>
                <li><strong>Layanan: </strong>Travel reguler, Carter pp dan drop, wisata religi, study tour</li>
                <li><strong>Harga tiket: </strong>Mulai Rp150.000</li>
            </ol>


            <h3>Travel Jawa</h3>

            <p>Yang ketiga adalah <i>Travel Jawa</i>. <a href="https://traveljawa.web.id" target="_blank"
                    title="Travel Jawa" rel="nofollow noindex">Travel Jawa</a> bisa diandlakan untuk rute
                {{ $page }} hari ini. Anda bisa melakukan pemesanan tiket travel dengan mudah langsung via
                whatsapp. Perjalanan cepat dan via tol penuh. Untuk harga travel sudah include biaya tol dan bbm. Dan
                pembayaran tiket travel dilakukan ketika anda sudah tiba di lokasi tujuan.</p>

            <p>Akan lebih disarankan jika memesan travel 1 hari sebelum keberangkatan. Agar pihak driver dapat
                mempersiapkan kebutuhan dengan maksimal, anda juga bisa lebih santai dan tidak terburu-buru selama
                perjalanan travel. Tapi jika mendadak maka sangat disarankan memesan travel carter
                {{ $originName }}.</p>

            <p>Untuk lebih lanjut, hubungi mereka pada kontak dibawah ini:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Jawa</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Semarang, Provinsi Jawa Tengah</li>
                <li><strong>Website: </strong>https://traveljawa.web.id</li>
                <li><strong>Fasilitas: </strong>Free bagasi, bonus makan, mobil ber-ac dan dapat merchandise untuk
                    carter</li>
                <li><strong>Unit: </strong>Unit lengkap, mulai dari hiace, elf long, minibus, avanza, innova dan
                    lain-lain</li>
                <li><strong>Jadwal: </strong>Setiap 2 jam di mulai dari jam 04.00 WIB hingga jam 20.00 WIB</li>
                <li><strong>Layanan: </strong>Kirim paket kilat, Travel reguler, Carter pp dan drop, wisata religi,
                    study tour, city tour, dan shuttle</li>
                <li><strong>Harga tiket: </strong>Mulai Rp50.000</li>
            </ol>

            <h3>Travel Kalimantan</h3>

            <p>Agen travel selanjutnya adalah <i>Travel Kalimantan</i>. <a href="https://travelkalimantan.web.id"
                    target="_blank" title="Travel Kalimantan" rel="nofollow noindex">Travel Kalimantan</a> sangat
                direkomendasikan jika
                anda mencari travel di daerah Kalimantan. Tapi sama seperti yang lain, tidak hanya terbatas pada daerah
                itu saja. Mereka siap melayani travel seluruh Indonesia terutama dari {{ $destinationName }} ke
                {{ $originName }}. </p>

            <p>
                Travel reguler tidak hanya populer di Pulau Jawa dan Sumatra saja! Kini beberapa daerah di Kalimantan
                mulai terdapat layanan transportasi travel reguler dan carter.Salah satunya adalah mereka, Travel
                Kalimantan. Travel ini bisa dibilang masih awal-awal, mulai dibangun sejak Januari 2025. Namun kini
                telah beroperasi di seluruh daerah di Kalimantan.
            </p>

            <p>Perhatikan profil dari agen travel ini:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Kalimantan</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Samarinda, Provinsi Kalimantan Timur</li>
                <li><strong>Website: </strong>https://travelkalimantan.web.id</li>
                <li><strong>Fasilitas: </strong>Mobil ber-ac dan door to door</li>
                <li><strong>Unit: </strong>Hiace, dan beberapa mobil pribadi</li>
                <li><strong>Jadwal: </strong>09.00 WITA dan 20.00 WITA</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, dan kirim paket</li>
                <li><strong>Harga tiket: </strong>Mulai Rp150.000</li>
            </ol>


            <h3>Travel Sulawesi</h3>

            <p>Nah, selanjutnya ada yang namanya <a href="https://travelsulawesi.web.id" target="_blank"
                    title="Travel Sulawesi" rel="nofollow noindex"><i>Travel Sulawesi</i></a>. Agen travel yang satu ini
                juga
                masih awal-awal. Hanya fokus pada travel di daerah Sulawesi, jika memesan travel di luar sulawesi maka
                harus carter.</p>

            <p>Berikut profil dari agen travel ini:</p>

            <ol>
                <li><strong>Nama: </strong>Travel Sulawesi</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kota Gorontalo, Provinsi Gorontalo</li>
                <li><strong>Website: </strong>https://travelsulawesi.web.id</li>
                <li><strong>Fasilitas: </strong>Mobil ber-ac, door to door, dan bonus minum</li>
                <li><strong>Unit: </strong>Avanza, Calya, dan Innova</li>
                <li><strong>Jadwal: </strong>07.00 WITA, 15.00 WITA, dan 21.00 WITA</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop/pp, dan kirim paket</li>
                <li><strong>Harga tiket: </strong>Mulai Rp99.000</li>
            </ol>


            <h3>Mumpuni Trans Java</h3>

            <p>Selanjutnya adalah <i>Mumpuni Trans Java</i>. {{ $page }} dengan sistem door to door dan pulang
                pergi. <a href="https://mumpunitransjava.com/" target="_blank" title="Mumpuni Trans Java"
                    rel="nofollow noindex">Mumpuni Trans Java</a> ini travel profesional dan terpercaya. Telah
                berpengalaman lebih dari {{ date('y') - 21 }} tahun dalam jasa travel untuk rute seluruh Indonesia.
                Akan tetap anda harus berhati-hati karena banyak oknum yang mengatasnamakan Mumpuni Trans Java.</p>

            <p>Mumpuni Trans Java atau biasa disingkat MTJ ini menawarkan travel yang nyaman, cepat, dan tentunya
                murah. Untuk pemesanan jangan sampai salah, hubungi nomor whatsapp {{ phoneNumber() }}. Bisa disarankan
                jika datang ke garasi mereka.</p>

            <p>Berikut profil dari Mumpuni Trans Java ini:</p>

            <ol>
                <li><strong>Nama: </strong>Mumpuni Trans Java</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Ciamis, Provinsi Jawa Barat</li>
                <li><strong>Website: </strong>https://mumpunitransjava.com/</li>
                <li><strong>Fasilitas: </strong>Mobil ber-ac, door to door, bonus makan, bonus minum, free bagasi 15 kg.
                </li>
                <li><strong>Unit: </strong>Hiace commuter, Grand max, Luxio, dan Suzuki APV</li>
                <li><strong>Jadwal: </strong>24 jam</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, carter pp (pulang pergi), dan kirim
                    paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai Rp180.000</li>
            </ol>


            <h3>Panda 88 Trans</h3>

            <p>Selanjutnya ada travel bernama <i>Panda 88 Trans</i> dari Magelang Jawa Tengah. Agen travel <a
                    href="https://panda88trans.web.id/" target="_blank" title="Panda 88 Trans"
                    rel="nofollow noindex">Panda 88 Trans</a> siap antar jemput 24 jam daerah Jawa, Bali, hingga
                Sumatra. Bisa pesan travel ataupun carter. Namun untuk jarak jauh sangat direkomendasikan memesan carter
                drop atau carter pp.</p>

            <p>
                Admin dari Panda 88 Trans sangat responsif dan ramah. Anda bisa pesan kapan saja dan dari mana saja
                tiket travelnya. Driver travel sangat profesional, jika penumpang hanya 1, maka mobil travel tetap
                jalan. Anda bisa melakukan perubahan jadwal dan pengembalian dana.
            </p>

            <p>Profil lengkap dari Panda 88 Trans:</p>

            <ol>
                <li><strong>Nama: </strong>Panda 88 Trans</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Magelang, Jawa Tengah</li>
                <li><strong>Website: </strong>https://mumpunitransjava.com/</li>
                <li><strong>Fasilitas: </strong>Hanya door to door.
                </li>
                <li><strong>Unit: </strong>Elf long dan Hiace</li>
                <li><strong>Jadwal: </strong>10.00 WIB, 15.00 WIB, dan 21.00 WIB</li>
                <li><strong>Layanan: </strong>Travel door to door, carter drop, carter pp (pulang pergi), dan kirim
                    paket kilat</li>
                <li><strong>Harga tiket: </strong>Mulai Rp180.000</li>
            </ol>


            <h3>Arman Trans</h3>

            <p>Yang terakhir adalah <i>Arman Trans</i>. Ini adalah travel pribadi yang kami rekomendasikan. Lantas owner
                <a href="https://armantrans.com/" target="_blank" title="Arman Trans" rel="nofollow noindex">Arman
                    Trans</a> yang menjadi driver langsung. Siap mengantarkan anda kemanapun, terutama di daerah
                {{ $originName }} dan {{ $destinationName }}. Jadi jangan khawatir, pasti sampai tujuan dengan
                selamat dan cepat.
            </p>

            <p>
                Arman Trans menjadi solusi {{ $page }} terbaik saat ini. Mereka selalu mengutamakan kepuasan
                para
                penumpang. Anti turun di tengah jalan dan selama perjalanan dijamin nyaman dengan mobil ber-ac.
            </p>

            <p>Profil lebih lanjut dari Arman Trans:</p>

            <ol>
                <li><strong>Nama: </strong>Arman Trans</li>
                <li><strong>Nomor Whatsapp: </strong>{{ phoneNumber() }}</li>
                <li><strong>Nomor Telepon: </strong>{{ phoneNumber() }}</li>
                <li><strong>Alamat Garasi: </strong>Kabupaten Tangerang, Provinsi Banten</li>
                <li><strong>Website: </strong>https://armantrans.com/</li>
                <li><strong>Fasilitas: </strong>Travel door to door dan bonus snack.
                </li>
                <li><strong>Unit: </strong>Innova dan Calya</li>
                <li><strong>Jadwal: </strong>24 jam</li>
                <li><strong>Layanan: </strong>Travel reguler, carter drop, dan carter pp</li>
                <li><strong>Harga tiket: </strong>Mulai Rp100.000</li>
            </ol>

            <h2>Rute Travel Lain yang Mungkin Anda Suka</h2>

            <p>Tak hanya rute {{ $page }}, kami juga memiliki beberapa rekomendasi <a
                    href="{{ route('travel.archive') }}">travel</a> lainnya. seperti:</p>

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

            <p>Dari {{ $originName }} ke {{ $destinationName }} memiliki jarak yang lumayan jauh. Berkilo-kilo
                meter
                jarak yang harus ditempuh, dan berjam-jam durasi yang akan dilalui. Maka dari itu anda harus tetap fit
                selama perjalanan.</p>

            <p>Anda ingin melakukan perjalanan {{ $page }} sendirian? Anda harus selalu hati-hati dalam setiap
                perjalanan.
                Dan tetap dokumentasikan setiap perjalanan agar anda punya kenang-kenangan. Namun sebelum melakukan
                perjalanan anda harus mengingat tips dari kami.</p>

            <p>Berikut tipsnya:</p>

            <ol>
                <li>Pilih agen travel yang terpercaya, selalu crosscheck</li>
                <li>Jangan bayar diawal, usahakan ketika tiba di lokasi</li>
                <li>Sediakan obat-obatan pribadi jika dibutuhkan</li>
                <li>Jangan lupa makan</li>
                <li>Pilih mobil yang ber-ac</li>
                <li>Siapkan semua kebutuhan dan pastikan koper tidak melebihi 15 kg</li>
            </ol>



            <h2>Cara Pesan Travel</h2>

            <p>Berikut cara pesan travel secara online maupun offline:</p>

            <ol>
                <li>Pertama konsultasikan harga dan titik antar jemput</li>
                <li>Isi formulir via whatsapp (jika online), jika offline isi formulir berupa kertas. Formulir berisi
                    data penumpang detail detail tiket.</li>
                <li>Tinggal tunggu jadwal keberangkatan maka admin akan menjemput anda</li>
            </ol>

            <p>
                Sangat mudah bukan? Jadi tunggu apalagi, ayo pesan <strong>{{ $page }}</strong> sekarang juga
                pada nomor
                {{ phoneNumber() }}.
            </p>

        </div>
    </div>
</div>
