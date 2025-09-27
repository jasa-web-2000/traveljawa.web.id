@php
    $faq = [
        [
            'question' => 'Apakah <i>"' . web()->title . '"</i> Merupakan Jasa Travel Resmi?',
            'answer' =>
                'Ya, <i>"' .
                web()->title .
                '"</i> adalah layanan travel resmi dan terpercaya, berpengalaman dalam menangani berbagai kebutuhan perjalanan untuk ' .
                web()->tagline .
                '. Dengan pelayanan profesional dan komitmen tinggi, kami hadir sebagai solusi transportasi terbaik untuk Anda.',
        ],
        [
            'question' => 'Berapa Biaya Layanan Travel?',
            'answer' =>
                'Biaya layanan travel kami menyesuaikan dengan rute perjalanan serta lokasi penjemputan dan pengantaran. Harga fleksibel sesuai kondisi terkini. Untuk info harga lengkap, silakan hubungi admin kami yang siap melayani Anda setiap saat.',
        ],
        [
            'question' => 'Apa Saja Jenis Mobil Travel yang Tersedia?',
            'answer' =>
                'Kami menyediakan berbagai pilihan armada dengan AC untuk kenyamanan Anda. Armada kami meliputi: Avanza, Xenia, Calya, Innova, Hiace, Elf Long, Elf Short, Luxio, Gran Max, Pregio, Travello, Mobilio, Ertiga, APV, Fortuner, Pajero Sport, dan masih banyak lagi.',
        ],
        [
            'question' => 'Di Mana Lokasi Garasi Travel?',
            'answer' =>
                'Garasi utama kami berlokasi di ' .
                address()->streetAddress .
                '. Selain itu, karena <i>"' .
                web()->title .
                '"</i> adalah agen travel profesional, kami juga bekerja sama dengan mitra travel yang tersebar di berbagai daerah.',
        ],
        [
            'question' => 'Bagaimana Proses Pemesanan Tiket Travel?',
            'answer' =>
                'Proses pemesanan sangat mudah dan fleksibel, bisa dilakukan kapan saja dan dari mana saja. Anda cukup mengisi formulir pemesanan, baik secara offline maupun melalui WhatsApp, dengan mencantumkan data penumpang dan detail lokasi penjemputan serta tujuan.',
        ],
        [
            'question' => 'Apakah Bisa Reschedule atau Refund?',
            'answer' =>
                'Perubahan jadwal (reschedule) sebaiknya dilakukan minimal 1 hari sebelum keberangkatan agar kami dapat mengatur ulang jadwal armada. Untuk pembatalan (refund), kami memberikan pengembalian dana 100%. Namun, biasanya kami tidak memerlukan DP saat pemesanan.',
        ],
    ];

@endphp

<div class="bg-background-primary">

    <div class="my-container text-center py-20">
        <x-sub-heading subTitle='FAQ Travel' description='Beberapa hal yang sering ditanyakan para penumpang.' />

        <ul
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-x-14 lg:gap-x-20 [&>li>div]:gap-x-3 [&>li>div]:flex [&>li>div]:items-start [&>li>div]:mb-5 [&_.icon-faq]:flex [&_.icon-faq]:items-center [&_.icon-faq]:justify-center [&_.icon-faq]:p-3 [&_.icon-faq]:rounded-full [&_.icon-faq]:simple-gradient [&_.icon-faq]:shadow-md [&_.icon-faq]:text-text-description-white [&_svg]:size-6">
            @foreach ($faq as $item)
                <li class="text-left mb-10">
                    <div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                        <div class="bg-background-secondary rounded-md py-5 px-7 w-full flex items-center">
                            <h3 class="">{!! $item['question'] !!}</h3>
                        </div>
                    </div>

                    <div>
                        <div class="bg-primary/5 border-b-8 border-primary rounded-md py-5 px-7 w-full">
                            <p class="text-text-description-black text-justify">{!! $item['answer'] !!}</p>
                        </div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>

</div>
