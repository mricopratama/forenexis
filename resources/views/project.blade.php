<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="py-20 bg-gray-50 pt-32">
        <!-- Header Projects -->
        <div class="container mx-auto px-4 text-center mb-12">
            <h2 class="project-title text-4xl font-bold text-gray-900 mb-4">
                My Projects
            </h2>
            <p class="text-gray-700 max-w-3xl mx-auto">
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="container mx-auto px-4 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            {{-- Project Card 1 --}}
            <div class="project-card group relative overflow-hidden rounded-lg shadow-xl cursor-pointer">
                <img src="{{ Vite::asset('resources/img/Etics.png') }}" alt="E-Commerce Design" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="overlay absolute inset-0 bg-indigo-900 bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="project-title-text text-2xl font-bold text-white mb-2" data-text="E-Commerce Design">
                        E-Commerce Design
                    </h3>
                    <p class="text-indigo-100 text-center">
                        A dynamic shopping platform with seamless animations and modern UI.
                    </p>
                </div>
            </div>

            {{-- Project Card 2 --}}
            <div class="project-card group relative overflow-hidden rounded-lg shadow-xl cursor-pointer">
                <img src="{{ Vite::asset('resources/img/Forenexis.png') }}" alt="Portofolio Website" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="overlay absolute inset-0 bg-indigo-900 bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="project-title-text text-2xl font-bold text-white mb-2" data-text="Portofolio Website">
                        Portofolio Website
                    </h3>
                    <p class="text-indigo-100 text-center">
                        A beautifully designed portfolio that brings creative work to life.
                    </p>
                </div>
            </div>

            {{-- Project Card 3 --}}
            <div class="project-card group relative overflow-hidden rounded-lg shadow-xl cursor-pointer">
                <img src="{{ Vite::asset('resources/img/project3.png') }}" alt="Admin Dashboard" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="overlay absolute inset-0 bg-indigo-900 bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="project-title-text text-2xl font-bold text-white mb-2" data-text="Admin Dashboard">
                        Admin Dashboard
                    </h3>
                    <p class="text-indigo-100 text-center">
                        An interactive dashboard with dynamic data visualization and smooth transitions.
                    </p>
                </div>
            </div>

            {{-- Project Card 4 (Item tambahan) --}}
            <div class="project-card group relative overflow-hidden rounded-lg shadow-xl cursor-pointer">
                <img src="{{ Vite::asset('resources/img/OnlineFood.jpg') }}" alt="Mobile App" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="overlay absolute inset-0 bg-indigo-900 bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="project-title-text text-2xl font-bold text-white mb-2" data-text="Mobile App">
                        Mobile App
                    </h3>
                    <p class="text-indigo-100 text-center">
                        A sleek and modern mobile application with intuitive design and fluid animations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sertakan GSAP dan ScrollTrigger dari CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <!-- Text Scramble Class (sumber: implementasi Soulwire) -->
    <script>
        class TextScramble {
            constructor(el) {
                this.el = el;
                this.chars = '!<>-_\\/[]{}—=+*^?#________';
                this.update = this.update.bind(this);
            }
            setText(newText) {
                const oldText = this.el.innerText;
                const length = Math.max(oldText.length, newText.length);
                const promise = new Promise((resolve) => this.resolve = resolve);
                this.queue = [];
                for (let i = 0; i < length; i++) {
                    const from = oldText[i] || '';
                    const to = newText[i] || '';
                    const start = Math.floor(Math.random() * 40);
                    const end = start + Math.floor(Math.random() * 40);
                    this.queue.push({ from, to, start, end });
                }
                cancelAnimationFrame(this.frameRequest);
                this.frame = 0;
                this.update();
                return promise;
            }
            update() {
                let output = '';
                let complete = 0;
                for (let i = 0, n = this.queue.length; i < n; i++) {
                    let { from, to, start, end, char } = this.queue[i];
                    if (this.frame >= end) {
                        complete++;
                        output += to;
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.28) {
                            char = this.randomChar();
                            this.queue[i].char = char;
                        }
                        output += `<span class="inline-block">${char}</span>`;
                    } else {
                        output += from;
                    }
                }
                this.el.innerHTML = output;
                if (complete === this.queue.length) {
                    this.resolve();
                } else {
                    this.frameRequest = requestAnimationFrame(this.update);
                    this.frame++;
                }
            }
            randomChar() {
                return this.chars[Math.floor(Math.random() * this.chars.length)];
            }
        }
    </script>

    <!-- Inisialisasi GSAP Animasi -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Animasi header: judul dan deskripsi
        gsap.timeline()
            .from(".project-title", { opacity: 0, y: -50, duration: 1, ease: "power2.out" })
        //     .from(".text-gray-700", { opacity: 0, y: 50, duration: 1, ease: "power2.out" }, "-=0.5");

        // Animasi project cards saat scroll
        gsap.utils.toArray('.project-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                opacity: 0,
                y: 50,
                rotation: 10,
                scale: 0.95,
                duration: 1.2,
                ease: "power2.out",
                delay: i * 0.1
            });
        });

        // Efek Text Scramble pada judul project saat hover
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const titleEl = card.querySelector('.project-title-text');
                if (titleEl) {
                    const finalText = titleEl.getAttribute('data-text');
                    const scramble = new TextScramble(titleEl);
                    scramble.setText(finalText);
                }
            });
        });
    </script>
</x-layout>
