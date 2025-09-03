<!-- ================= SECTION TENTANG KAMI ================= -->
<section id="tentang" class="relative bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row items-center justify-center gap-14 md:gap-20">

    <!-- Gambar Kepala Sekolah -->
    <div class="relative flex justify-center" data-aos="fade-right" data-aos-duration="1000">
      <!-- Kotak Biru -->
      <div class="absolute -top-8 -left-8 w-72 h-[26rem] md:w-96 md:h-[32rem] bg-blue-900 hidden sm:block"></div>

      <!-- Kotak Orange dengan Gambar -->
      <div class="relative z-10 w-72 h-[26rem] md:w-96 md:h-[32rem] bg-orange-500 overflow-hidden shadow-xl md:rounded-none rounded-lg">
        <img src="assets/tentang/kepala-sekolah.png" alt="Kepala Sekolah" class="w-full h-full object-cover">

        <!-- Nama Kepala Sekolah -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 
                    w-[90%] md:w-[85%] bg-white/95 backdrop-blur-md shadow-lg 
                    px-4 md:px-5 py-3 text-left rounded-md">
          <p class="text-sm md:text-base font-bold text-orange-600 leading-snug">
            Hendry Kurniawan, S.Kom., M.I.Kom.
          </p>
          <p class="text-[11px] md:text-xs text-black font-medium tracking-wide">
            Kepala Sekolah SMK Prestasi Prima
          </p>
        </div>
      </div>
    </div>

    <!-- Teks Tentang Kami -->
    <div class="text-center md:text-left max-w-xl" data-aos="fade-left" data-aos-duration="1000">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
        Tentang <span class="text-orange-600">Kami</span>
      </h2>
      <p class="text-gray-600 leading-relaxed mb-10 text-sm md:text-base">
        Kami adalah lembaga pendidikan yang berkomitmen mencetak generasi unggul, kreatif, dan siap menghadapi tantangan masa depan.
        Dengan dukungan tenaga pendidik profesional serta fasilitas modern, kami menghadirkan pengalaman belajar berbasis praktik nyata.
        Fokus kami adalah membimbing siswa untuk mengembangkan potensi, mengasah keterampilan, dan membangun karakter agar mampu
        bersaing di dunia industri maupun melanjutkan pendidikan ke jenjang lebih tinggi.
      </p>

      <!-- Statistik -->
      <div class="grid grid-cols-2 md:grid-cols-4 text-center mb-10 border border-orange-500">
        <div class="stat-item px-6 py-6 border-b border-r border-orange-500 md:border-b-0" data-target="2550">
          <p class="stat-number text-3xl font-bold text-gray-800">0</p>
          <span class="text-sm text-gray-600">Peserta Didik</span>
        </div>
        <div class="stat-item px-6 py-6 border-b border-orange-500 md:border-b-0 md:border-r" data-target="200">
          <p class="stat-number text-3xl font-bold text-gray-800">0</p>
          <span class="text-sm text-gray-600">Guru & Tendik</span>
        </div>
        <div class="stat-item px-6 py-6 border-r border-orange-500" data-target="40">
          <p class="stat-number text-3xl font-bold text-gray-800">0</p>
          <span class="text-sm text-gray-600">Ruang Kelas</span>
        </div>
        <div class="stat-item px-6 py-6" data-target="6">
          <p class="stat-number text-3xl font-bold text-gray-800">0</p>
          <span class="text-sm text-gray-600">Lab Komputer</span>
        </div>
      </div>

      <!-- Tombol -->
      <a href="#"
        class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold 
               px-6 md:px-8 py-2.5 md:py-3 shadow-lg rounded-lg transition">
        Selengkapnya →
      </a>
    </div>
  </div>
</section>

<!-- Script Count Up (bersih + smooth + responsive) -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-number");

    counters.forEach(counter => {
      const target = +counter.parentElement.getAttribute("data-target");
      let started = false;

      const updateCount = () => {
        const duration = 2000;
        const startTime = performance.now();

        function animate(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const eased = progress * (2 - progress);
          counter.textContent = Math.floor(eased * target).toLocaleString();
          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            counter.textContent = target.toLocaleString() + (target >= 100 ? "+" : "");
          }
        }
        requestAnimationFrame(animate);
      };

      const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting && !started) {
          updateCount();
          started = true;
        }
      }, { threshold: 0.5 });

      observer.observe(counter);
    });
  });
</script>
