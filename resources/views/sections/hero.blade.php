<!-- Hero Video Section -->
<section id="heroVideoSection" class="relative h-screen w-full overflow-hidden bg-cover bg-center"
         style="background-image: url('{{ asset('assets/images/sekolah_ls.png') }}');">
    
    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black/40 z-10"></div>

    <!-- Video Hero -->
    <video id="heroVideo" autoplay muted playsinline
           class="absolute inset-0 w-full h-full object-cover z-20 transition-opacity duration-1000">
        <source src="{{ asset('assets/videos/videos.mp4') }}" type="video/mp4">
        Browsermu tidak mendukung video.
    </video>

    <!-- Tombol Lewati -->
    <div id="skipBtnContainer" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-30">
        <button id="skipBtn"
            class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg shadow-lg text-base font-semibold transition">
            Lewati Video →
        </button>
    </div>
</section>

<!-- Hero Content Section (disembunyikan awalnya) -->
<section id="heroContentSection" class="relative min-h-[80vh] md:min-h-screen flex items-center bg-cover bg-center hidden"
         style="background-image: url('{{ asset('assets/images/hero-bg.png') }}');">
    
    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>

    <!-- Content -->
    <div class="relative z-10 text-left text-white max-w-2xl px-6 lg:px-12 ml-6 md:ml-16">
        <p class="italic text-base md:text-lg font-light mb-3 leading-tight border-l-4 border-orange-500 pl-3">
            “If better is possible, good is not enough”
        </p>
        <h1 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow-lg tracking-wide">
            PRESTASI PRIMA
        </h1>
        <p class="text-sm md:text-lg font-medium mb-6 leading-snug text-gray-200">
            Kami berkomitmen menyelenggarakan pendidikan berkualitas tinggi 
            yang membentuk generasi unggul, berkarakter, dan siap menghadapi 
            tantangan masa depan.
        </p>
        <a href="#tentang"
           class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg shadow-lg text-sm md:text-base transition transform hover:scale-105">
            Selengkapnya →
        </a>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const videoSection = document.getElementById("heroVideoSection");
    const video = document.getElementById("heroVideo");
    const skipBtn = document.getElementById("skipBtn");
    const skipBtnContainer = document.getElementById("skipBtnContainer");
    const contentSection = document.getElementById("heroContentSection");

    function showContent() {
        // Fade out video section
        videoSection.style.transition = "opacity 1s";
        videoSection.style.opacity = 0;

        setTimeout(() => {
            videoSection.style.display = "none";
            skipBtnContainer.style.display = "none";

            // Tampilkan hero content section
            contentSection.classList.remove("hidden");
            contentSection.style.opacity = 0;
            contentSection.style.transition = "opacity 1s";

            // Force reflow supaya transition berlaku
            void contentSection.offsetWidth;

            contentSection.style.opacity = 1;
        }, 1000);
    }

    // Video selesai
    video.addEventListener("ended", showContent);

    // Tombol skip
    skipBtn.addEventListener("click", showContent);

    // Pastikan video autoplay
    video.muted = true;
    video.play().catch(() => console.warn("Autoplay diblokir browser"));
});
</script>
