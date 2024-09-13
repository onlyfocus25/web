    <div class="grid gap-4">
        <h2 class="text-3xl font-extrabold text-white text-left mt-5 mb-3">Gallery</h2>
<div id="image-carousel" class="relative w-full" data-carousel="slide">
        <div class="grid grid-cols-5 gap-4 m-5">
            <div>
                <img class="h-auto max-w-full rounded-lg popup-trigger cursor-pointer"
                    src="{{ asset('images/image6.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg popup-trigger cursor-pointer"
                    src="{{ asset('images/image7.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg popup-trigger cursor-pointer"
                    src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg popup-trigger cursor-pointer"
                    src="{{ asset('images/image12.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg popup-trigger cursor-pointer"
                    src="{{ asset('images/image5.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="imagePopup" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-75">
        <div class="relative max-w-3xl max-h-screen p-4 bg-white rounded-lg">
            <img id="popupImage" class="w-full h-auto max-h-[80vh] object-contain transition-transform transform translate-x-full" src="" alt="">
            <button id="closePopup" class="absolute top-2 right-2 text-red-500 text-2xl font-bold cursor-pointer">&times;</button>
        </div>
    </div>

    <script>
        document.querySelectorAll('.popup-trigger').forEach(item => {
            item.addEventListener('click', event => {
                const imageUrl = event.target.src;
                const popup = document.getElementById('imagePopup');
                const popupImage = document.getElementById('popupImage');
                popupImage.src = imageUrl;
                popup.classList.remove('hidden');
                setTimeout(() => {
                    popupImage.classList.remove('translate-x-full');
                }, 10); // small delay to trigger the transition
            });
        });

        document.getElementById('closePopup').addEventListener('click', () => {
            const popup = document.getElementById('imagePopup');
            const popupImage = document.getElementById('popupImage');
            popupImage.classList.add('translate-x-full');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 300); // matches the transition duration
        });

        // Close the modal if the user clicks outside the image
        document.getElementById('imagePopup').addEventListener('click', (event) => {
            if (event.target === event.currentTarget) {
                const popup = document.getElementById('imagePopup');
                const popupImage = document.getElementById('popupImage');
                popupImage.classList.add('translate-x-full');
                setTimeout(() => {
                    popup.classList.add('hidden');
                }, 300); // matches the transition duration
            }
        });
    </script>
