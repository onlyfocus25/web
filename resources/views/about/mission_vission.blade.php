<x-layout>
    <section class="py-10 bg-gradient-to-r from-blue-500 to-green-400 text-white">
        <h2 class="text-4xl font-bold text-gray-900 text-left mb-5" id="vision-mission-title"></h2>
        <p class="text-gray-800 m-5 leading-relaxed" id="vision"></p>
        <p class="text-gray-800 m-5 leading-relaxed" id="mission"></p>
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

            // Vision and Mission texts
            const visionMissionTitle = "Vision & Mission";
            const visionText = "To Spearhead Employable Education in Africa and Become part of its History.";
            const missionText = "Capacity Building of Children of Africa To meet the Emerging Challenges happening in the World, By imparting Quality Employable Education with Discipline which leads to Self Enlightenment and Development of the Nation.";

            // Typing effect for Vision & Mission
            typeWriter(visionMissionTitle, 'vision-mission-title', 100, () => {
                typeWriter(visionText, 'vision', 2, () => {
                    typeWriter(missionText, 'mission', 2);
                });
            });
        });
    </script>
</x-layout>
