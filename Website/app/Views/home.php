<div x-data="{
    currentIndex: 0,
    desktopImages: [
        'https://media.istockphoto.com/id/1159883458/vector/medical-insurance-template-hospital.jpg?s=612x612&w=0&k=20&c=EdgxXlcCy6IQRLJk6fTvA1Aa-NE1J97mCxm3lVI_W5s=',
        'https://media.istockphoto.com/id/1298883368/photo/modern-hospital-isolation-rooms.jpg?s=612x612&w=0&k=20&c=4dbZdrRS87cgnIBVe8yii5_1F-NcKtiLTcQDPE-yiLM=',
        'https://media.istockphoto.com/id/1295775470/photo/hospital-corridor.jpg?s=612x612&w=0&k=20&c=EzhDKzSGsvzAkKcpraz92HSl776Ub2yAVe6kM08LTj4='
    ],
    mobileImages: [
        'https://placehold.co/640x360/333/fff?text=Mobile+Slide+1',
        'https://placehold.co/640x360/007bff/fff?text=Mobile+Slide+2',
        'https://placehold.co/640x360/28a745/fff?text=Mobile+Slide+3'
    ],
    get currentImages() {
        return window.innerWidth >= 640 ? this.desktopImages : this.mobileImages;
    },
    next() {
        this.currentIndex = (this.currentIndex + 1) % this.currentImages.length;
    },
    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.currentImages.length) % this.currentImages.length;
    },
    dotClick(index) {
        this.currentIndex = index;
    },
    autoSlide() {
        setInterval(() => {
            this.next();
        }, 10000);
    }
}" x-init="autoSlide()" class="relative w-full overflow-hidden rounded-md">
    <div class="relative md:h-96 h-64"> <template x-for="(image, index) in currentImages" :key="index">
            <div
                x-show="currentIndex === index"
                class="absolute top-0 left-0 w-full h-full transition-opacity duration-500"
                :class="{ 'opacity-100': currentIndex === index, 'opacity-0': currentIndex !== index }">
                <img :src="image" alt="Carousel Slide" class="w-full h-full object-cover">
            </div>
        </template>

        <button @click="prev()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="next()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(image, index) in currentImages" :key="index">
                <button
                    @click="dotClick(index)"
                    class="w-3 h-3 rounded-full focus:outline-none"
                    :class="{ 'bg-blue-500': currentIndex === index, 'bg-gray-300': currentIndex !== index }"></button>
            </template>
        </div>
    </div>
    <!-- Bagian Judul, Keterangan, dan Media Sosial (WhatsApp, FB, IG) -->
    <div class="text-center mt-8 px-4">
        <div class="bg-gray-100 py-8 px-6 rounded-lg max-w-3xl mx-auto shadow-md">
            <h1 class="text-3xl font-bold text-black-800">RSUD Persahabatan</h1>
            <p class="mt-4 text-gray-700">
                RSUD Persahabatan adalah rumah sakit rujukan nasional untuk layanan paru dan pernapasan,
                dengan komitmen memberikan layanan kesehatan terbaik di Jakarta Timur.
            </p>

            <!-- Media Sosial -->
            <div class="mt-6 flex justify-center space-x-6">
                <!-- WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="text-green-500 hover:text-green-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A12 12 0 0 0 2.18 16.89L1 22l5.27-1.38a12 12 0 0 0 14.25-17.14zM12.03 19c-1.63 0-3.23-.44-4.63-1.27l-.33-.2-3.12.82.84-3.03-.22-.31A6.94 6.94 0 0 1 12.03 5a6.97 6.97 0 0 1 6.96 6.96A6.96 6.96 0 0 1 12.03 19zm3.89-5.24c-.21-.1-1.26-.62-1.45-.69-.19-.07-.33-.1-.47.1s-.54.69-.66.83c-.12.14-.24.15-.45.05a5.69 5.69 0 0 1-2.17-1.65 8.11 8.11 0 0 1-1.51-2.5c-.06-.16 0-.35.09-.48.1-.13.22-.28.34-.42.12-.14.17-.24.26-.39.09-.15.05-.29-.01-.41-.06-.13-.47-1.12-.65-1.53-.17-.4-.34-.34-.47-.35H8.2c-.13 0-.34.05-.52.24a2.19 2.19 0 0 0-.68 1.63c0 .24.05.48.12.7.21.69.65 1.4.74 1.55.1.14 1.26 2 3.06 2.82 1.8.82 1.8.55 2.13.52.33-.03 1.05-.43 1.2-.85.15-.42.15-.79.1-.85-.05-.06-.19-.1-.4-.2z" />
                    </svg>
                </a>

                <!-- Facebook -->
                <a href="https://facebook.com/rsudpersahabatan" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.86 8 9.8v-6.93H7.5v-2.87H10V9.75c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.46h-1.25c-1.23 0-1.61.77-1.61 1.56v1.88h2.75l-.44 2.87H13.1v6.93c4.56-.94 8-4.96 8-9.8z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com/rsudpersahabatan" target="_blank" rel="noopener noreferrer" class="text-pink-500 hover:text-pink-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.16c3.2 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.312.975.975 1.25 2.242 1.312 3.608.058 1.266.07 1.65.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.312 3.608-.975.975-2.242 1.25-3.608 1.312-1.266.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.312-.975-.975-1.25-2.242-1.312-3.608C2.172 15.584 2.16 15.2 2.16 12s.012-3.584.07-4.85c.062-1.366.336-2.633 1.312-3.608C4.518 2.566 5.785 2.292 7.15 2.23c1.266-.058 1.65-.07 4.85-.07zm0-2.16C8.713 0 8.293.012 7.017.07 5.71.128 4.487.417 3.408 1.497 2.328 2.577 2.04 3.8 1.983 5.107.925 6.383.913 6.803.913 12s.012 5.617.07 6.893c.058 1.307.345 2.53 1.425 3.61s2.303 1.367 3.61 1.425C8.293 23.988 8.713 24 12 24s3.707-.012 4.983-.07c1.307-.058 2.53-.345 3.61-1.425s1.367-2.303 1.425-3.61c.058-1.276.07-1.696.07-6.893s-.012-5.617-.07-6.893c-.058-1.307-.345-2.53-1.425-3.61S18.29.128 16.983.07C15.707.012 15.287 0 12 0zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>



</div>

</div>