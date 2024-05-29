@extends('public_view/layouts/layouts')

@section('content')
<style>
    .form-container {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }

    .form-container input,
    .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .form-container button {
        background: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .form-container button:hover {
        background: #0056b3;
    }

    .form-container .flex-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .form-container .flex-row>div {
        flex: 1;
    }

    .content-wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-start;
    }

    .text-left {
        text-align: left;
    }

    .contact-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .contact-section>div {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
    }
</style>
<div class="content-wrapper ">
    <img class="w-full mt-5" src="{{ asset('assets/public_dist/image/contact.png') }}" alt="Contact image">
    <div class="text-left text-white px-4">
        <h1
            class="lg:text-6xl text-5xl font-bold mb-4 text-transparent bg-gradient-to-br from-primary to-state bg-clip-text text-left">
            Contact</h1>
    </div>
    <div class="contact-section py-8">
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509007!2d144.9537353153183!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5775963c8d4000!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1621053285221!5m2!1sen!2sau"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div>
            <form action="#" method="POST" class="form-container">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-bold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="flex-row">
                    <div>
                        <label for="first-name" class="block text-sm font-bold mb-2">First Name</label>
                        <input type="text" id="first-name" name="first-name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-bold mb-2">Last Name</label>
                        <input type="text" id="last-name" name="last-name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection