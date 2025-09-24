@php
    $faq = [
        [
            'question' => 'Apakah <i>"' . web()->title . '"</i> Travel Resmi?',
            'answer' =>
                'Tentu saja, kami adalah travel resmi dan berpengalaman dalam melayani berbagai kebutuhan perjalanan untuk ' .
                web()->tagline .
                ' Dengan komitmen tinggi terhadap pelayanan, kami siap memberikan solusi transportasi terbaik untuk Anda.',
        ],
        [
            'question' => 'Berapa Harga Travel?',
            'answer' =>
                'Harga travel kami sangat bervariasi tergantung rute perjalanan dan titik antar jemput yang Anda pilih. Semua penyesuaian dilakukan berdasarkan kondisi saat itu. Untuk informasi harga yang lebih lengkap dan detail, silakan menghubungi admin kami yang siap membantu Anda kapan saja.',
        ],
        [
            'question' => 'Tersedia Mobil Travel Apa Saja?',
            'answer' =>
                'Kami memiliki banyak mobil untuk layanan travel, semua mobil telah dilengkapi ac. Berikut daftar mobil yang kami miliki: Avanza, Xenia, Calya, Innova, Hiace, Elf Long, Elf Short, Luxio, Gran Max, Pregio, Travello, Mobilio, Ertiga, APV, Fortuner, Pajero Sport, dan masih banyak lagi.',
        ],
        [
            'question' => 'Garasi Travel Ada Di Mana?',
            'answer' =>
                'Untuk garasi utama kami ada di ' .
                address()->streetAddress .
                '. Namun karena ' .
                web()->title .
                ' adalah agen travel terpercaya, kami pastinya memiliki partner travel yang tersebar diberbagai daerah.',
        ],
        [
            'question' => 'Bagaimana Cara Pesan Tiket?',
            'answer' =>
                'Cara pesen tiket sangatlah mudah, bisa pesan kapan saja dan di mana saja. Pastinya anda akan mengisi formulir langsung baik itu offline maupun offline via whatsapp. Isi data sesuai penumpang dan berikan detail lokasi antar jemput.',
        ],
        [
            'question' => 'Bisa Melakukan & Refund?',
            'answer' =>
                'Untuk reschedule atau perubahan jadwal disarankan dilakukan 1 hari sebelum keberangkatan. Agar kami dapat menyesuaikan jadwal sopir. Sedangakan refund bisa diklaim 100%. Tapi biasanya kami tidak meminta dp ketika pemesanan.',
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
