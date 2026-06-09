<section id="contacto" class="py-20 bg-gray-50">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Hablemos de tu proyecto</h2>
        
        <!-- Reemplaza 'TU_ID_DE_FORMSPREE' por el endpoint que te dará Formspree -->
        <form action="https://formspree.io/f/TU_ID_DE_FORMSPREE" method="POST" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                Enviar Mensaje
            </button>
        </form>
    </div>
</section>