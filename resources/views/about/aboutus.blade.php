<x-layout>
    <section class="py-10 bg-gradient-to-r from-blue-500 to-green-400 text-white">
        <div class="flex m-5 justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-gray-900 text-left mb-5" id="about-title"></h1>
        </div>
        <h2 class="text-3xl text-justify font-semibold text-gray-700 mb-8 m-5" id="sub-title"></h2>
        <div class="grid m-5 grid-cols-1 md:grid-cols-2 gap-8 text-gray-800 leading-relaxed">
            <div>
                <p class="mb-4" id="para-1"></p>
                <p class="mb-4" id="para-2"></p>
                <p class="mb-4" id="para-3"></p>
                <p id="para-4"></p>
            </div>
            <div>
                <p class="mb-4" id="para-5"></p>
                <p class="mb-4" id="para-6"></p>
                <p id="para-7"></p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Typing effect function
            function typeWriter(text, elementId, delay = 20, callback = null) {
                let i = 0;
                const element = document.getElementById(elementId);
                element.innerHTML = '';
                function type() {
                    if (i < text.length) {
                        element.innerHTML += text.charAt(i);
                        i++;
                        setTimeout(type, delay);
                    } else if (callback) {
                        callback();
                    }
                }
                type();
            }

            // Texts for paragraphs
            const texts = [
                "St. Joseph University In Tanzania (SJUIT) is a renowned University in Tanzania currently with three active colleges, two at its Mbezi-Luguruni Campus and one at its Boko campus.",
                "The colleges at the Mbezi-Luguruni campus offer Degree and Ordinary Diploma programmes in various fields of Engineering and Sciences and Mathematics Education.",
                "The college at the Boko campus offers MD (Doctor of Medicine), Pharmaceutical Sciences and Nursing programmes.",
                "SJUIT has secured the position as the UNIVERSITY OF CHOICE when it comes to engineering, ICT, science education, medical and paramedical-related studies in Tanzania. SJUIT is a university of choice not just for students alone but also for parents alike, as well as the labor market.",
                "The university owes its existence and operations to its mission which focuses on Capacity Building by offering Quality Employable Education. The products of the university are well sought in the labor market for their mantle, discipline, and dedication.",
                "SJUIT produces the leaders of the country, who are well-known for their discipline, knowledge, skill, loyalty, and integrity.",
                "SJUIT has become a destination WHERE YOUR DREAMS ARE NURTURED. SJUIT has secured the position as the UNIVERSITY OF CHOICE when it comes to engineering, ICT, science education, medical and paramedical-related studies in Tanzania."
            ];

            // Typing effect for titles
            typeWriter('ABOUT', 'about-title', 100, () => {
                typeWriter('WHO WE ARE', 'sub-title', 50, () => {
                    // Start typing paragraphs sequentially
                    typeWriter(texts[0], 'para-1', 2, () => {
                        typeWriter(texts[1], 'para-2', 2, () => {
                            typeWriter(texts[2], 'para-3', 2, () => {
                                typeWriter(texts[3], 'para-4', 2, () => {
                                    typeWriter(texts[4], 'para-5', 2, () => {
                                        typeWriter(texts[5], 'para-6', 2, () => {
                                            typeWriter(texts[6], 'para-7', 2);
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });

        });
    </script>
</x-layout>
