@extends('public_view/layouts/layouts')

@section('content')
<section class="story relative mt-28">
    <img class="w-full" src="{{ asset('assets/public_dist/image/typo-contact.png') }}" >
    <h2 class="absolute -top-10 left-10 lg:left-12 text-6xl font-extrabold text-primary mt-24 ml-6">Contact</h2>
</section>
<div class="content-wrapper relative">
    <div class="container contact-section p-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.438425044908!2d106.91367891069783!3d-6.276637567812444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTrCsDAwJzU1LjkiUyAxMDbCsDEwJzU4LjgiRQ!5e0!3m2!1sen!2sid!4v1622407453309!5m2!1sen!2sid&q=-6.276823718918699,106.91365826138949" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
            </div>
            <div>
                <form method="POST" class="form-container" action="https://formspree.io/f/xqkrvzyk">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-sm font-bold mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="flex flex-col md:flex-row md:space-x-4">
                        <div class="mb-4 md:w-1/2">
                            <label for="first-name" class="block text-sm font-bold mb-2">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4 md:w-1/2">
                            <label for="last-name" class="block text-sm font-bold mb-2">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="inline-block mt-4 px-6 py-2 bg-primary text-white rounded-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
