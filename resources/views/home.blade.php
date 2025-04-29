<x-layout>
    <section class="relative h-screen w-full flex items-center justify-center bg-gray-900 text-white overflow-hidden">
        {{-- Background Animasi --}}
        <div class="absolute inset-0 overflow-hidden">
            @for ($i = 0; $i < 20; $i++)
                <div class="absolute rounded-full bg-blue-500/10 animate-float"
                    style="width: {{ rand(50, 300) }}px; height: {{ rand(50, 300) }}px; left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%"></div>
            @endfor
        </div>

        {{-- Konten Utama --}}
        <div class="container mx-auto z-10 pt-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fadeIn">
                Welcome to <span class="text-blue-300">Forenexis</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 animate-slideUp">
                Creating beautiful digital experiences that inspire and engage
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fadeIn animation-delay-300">
                <a
                    href="{{ url('/contact') }}"
                    class="px-8 py-3 bg-white text-gray-900 font-medium rounded-full hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1"
                >
                    Get Started
                </a>
                <a
                    href="{{ url('/about') }}"
                    class="px-8 py-3 bg-transparent border-2 border-white text-white font-medium rounded-full hover:bg-white/10 transition-all duration-300"
                >
                    Learn More
                </a>
            </div>
        </div>

        {{-- Tombol Panah ke Bawah --}}
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="{{ url('/project') }}" class="scroll-to-project">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white transition-all duration-300 hover:scale-110" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </section>

    <style>
        @keyframes pulseHalo {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.2); opacity: 0; }
        }
        .animate-pulseHalo {
            animation: pulseHalo 1s infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .animate-floating {
            animation: floating {{ rand(10, 20) }}s infinite ease-in-out;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

</x-layout>
