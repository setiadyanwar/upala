@extends('public_view/layouts/layouts')

@section('content')
<div class="content-wrapper relative">
    <img class="w-full mt-5" src="{{ asset('assets/public_dist/image/contact.png') }}" alt="Contact image">
    <div class="top-0 text-left text-white pl-12 container">
        <h1 class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-left">Contact</h1>
    </div>
    <div class="container contact-section p-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509007!2d144.9537353153183!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5775963c8d4000!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1621053285221!5m2!1sen!2sau" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div>
                <form  method="POST" class="form-container"
                action="https://formspree.io/f/xdoqrndq">
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
