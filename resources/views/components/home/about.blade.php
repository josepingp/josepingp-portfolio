<section id="about" class="dark:bg-page-600 bg-white lg:pt-[120px] pb-20 lg:pb-[90px] overflow-hidden">
    <div class="container pt-20">
        <div class="flex flex-wrap justify-between -mx-4 items-center">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('img/hero.png') }}" alt="" class="rounded-2xl w-full">
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('img/hero.png') }}" alt="" class="rounded-2xl w-full">
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="{{ url('img/hero.jpeg') }}" alt="" class="rounded-2xl w-full">
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semiboldbold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm dark:text-dark-6 text-gray-700 py-2 px-3 border-l-4 border-primary">
                            Todo es posible con constancia y trabajo duro.
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-dark-2 mb-8">
                        Jose Luis García Pelayo.
                    </h2>
                    <p class="text-base dark:text-dark-2 mb-8">
                        Comencé mi trayectoria profesional en el mundo de la siderurgia, desde que era pequeño me atraía
                        la tecnología, dando mis primeros pasos modificando scripts en un servidor de juegos con 17
                        años más o menos. <br>
                        Poco a poco, y de forma
                        autodidacta, me fue picando el gusanillo de crear mis propias aplicaciones informáticas.
                        En 2020, con el parón que todos sufrimos, viví un periodo de reflexión que me brindó la
                        oportunidad de reconectarme con una vieja pasión: la programación. Decidí hacer un cambio
                        radical
                        en mi vida y perseguir mi sueño de convertirme en desarrollador de software.
                        Después de tomar la decisión de seguir esta nueva dirección, me certifique como Desarrollador de
                        Aplicaciones con Tecnologías Web, donde profundicé mis conocimientos técnicos y
                        afianzé mi amor por el código. <br>
                        Hoy, estoy emocionado por las oportunidades que el futuro me depara en el campo del desarrollo
                        de software, me siento orgulloso de la decisión que tomé, y más que nunca, estoy dispuesto a
                        seguir aprendiendo y creciendo profesionalmente.
                    </p>
                    <x-button-link href="#contact" variant="primary" class="rounded-lg">
                        Contacto
                    </x-button-link>
                </div>
            </div>
            <x-stack></x-stack>
        </div>
</section>
