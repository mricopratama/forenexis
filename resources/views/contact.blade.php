<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="py-20 bg-white pt-32">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate-fadeIn">Get In Touch</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6 animate-growWidth"></div>
                <p class="text-gray-600 animate-fadeIn animation-delay-300">
                    Have a project in mind? We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.
                </p>
            </div>

            {{-- Pesan Sukses --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Validasi Error --}}
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-12">
                {{-- Formulir Kontak --}}
                <div class="animate-slideInLeft">
                    <form class="space-y-6" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    placeholder="Your name"
                                    required
                                />
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    placeholder="Your email"
                                    required
                                />
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="Subject"
                                required
                            />
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="Your message"
                                required
                            >{{ old('message') }}</textarea>
                        </div>
                        <button
                            type="submit"
                            class="px-8 py-3 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition-all duration-300 w-full md:w-auto"
                        >
                            Send Message
                        </button>
                    </form>
                </div>

                {{-- Informasi Kontak --}}
                <div class="animate-slideInRight">
                    <div class="bg-gray-50 p-8 rounded-lg h-full">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-bold text-gray-700 mb-2">Address</h4>
                                <p class="text-gray-600">87 Singoranu Street, Tamanan, Banguntapan, Special Region of Yogyakarta</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-700 mb-2">Email</h4>
                                <p class="text-gray-600">forenexis@gmail.com</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-700 mb-2">Phone</h4>
                                <p class="text-gray-600">+62 (555) 123-4567</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-700 mb-2">Working Hours</h4>
                                <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p class="text-gray-600">Saturday - Sunday: Closed</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="font-bold text-gray-700 mb-4">Find Us On Map</h4>
                            <div class="h-64 rounded-lg overflow-hidden">
                              <iframe
                                class="w-full h-full"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?q=-7.8329077891269785,110.38312554844693&z=15&output=embed">
                              </iframe>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
