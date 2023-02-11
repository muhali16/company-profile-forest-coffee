<section class="container py-5">
    <form action="" method="post" class="border p-3 p-md-5 m-auto w-75" style="border-radius: 10px;">
        <h1 class="text-white py-4" style="opacity: .8;">Hubungi Kami</h1>
        <p class="text-white fw-light" style="opacity: .6;">Tetap terhubung dengan kami melalui form direct message di bawah untuk pertanyaan atau table reservation. Anda juga dapat menghubungi kami melalui email <strong>info@example.com</strong></p>
        <hr class="bg-white my-4">
        <label for="nama" class="text-white fs-6 d-flex flex-column mb-4">
            <span>Nama <span class="text-danger inline">*</span></span>
            <input type="text" name="nama" id="nama" placeholder="Michael Jonash" class="py-1 px-2 border rounded mt-2" required autofocus>
        </label>
        <label for="number" class="text-white fs-6 d-flex flex-column mb-4">
            <span>WhatsApp Number</span>
            <input type="tel" name="number" id="number" placeholder="081234567890" class="py-1 px-2 border rounded mt-2">
        </label>
        <label for="email" class="text-white fs-6 d-flex flex-column mb-4">
            <span>Email <span class="text-danger inline">*</span></span>
            <input type="email" name="email" id="email" placeholder="michael.jonash@gmail.com" class="py-1 px-2 border rounded mt-2" required>
        </label>
        <label for="message" class="text-white fs-6 d-flex flex-column mb-4">
            <span>Message <span class="text-danger inline">*</span></span>
            <textarea name="message" id="message" placeholder="I would like to ask..." class="py-1 px-2 border rounded mt-2" required></textarea>
        </label>
        <div class="text-end">
            <button type="submit" name="send" class="btn btn-success w-25" style="background-color: rgb(12, 65, 40);">Send</button>
        </div>
    </form>
</section>