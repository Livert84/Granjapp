<x-layout
    title="Bienvenido"
    meta-description="Granjapp.es meta description"
>
    <x-layout-public>

        <!-- Hero -->
        <div id="titleFront" class="text-center my-auto position-relative">
            <div class="position-absolute top-50 start-50 translate-middle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534.5525568181818 166.90841523249452"
                    height="100">
                    <!-- svg-source:excalidraw -->

                    <defs>
                        <style>
                            @font-face {
                                font-family: "Virgil";
                                src: url("https://excalidraw.com/Virgil.woff2");
                            }

                            @font-face {
                                font-family: "Cascadia";
                                src: url("https://excalidraw.com/Cascadia.woff2");
                            }
                        </style>
                    </defs>
                    <g stroke-linecap="round"
                        transform="translate(10 21.662955791549848) rotate(0 257.2762784090909 67.62272972047234)">
                        <path
                            d="M31.41 -3.25 L481.42 0.72 L495.78 3.36 L510.41 13.07 L516.34 29.54 L518 99.42 L509.5 119.26 L497.91 128.97 L481.79 131.35 L30.5 131.68 L21.15 130.45 L6.29 125.4 L4.03 112.13 L-0.11 29.36 L8.41 15.47 L15.12 1.92 L34.2 -0.7"
                            stroke="none" stroke-width="0" fill="white"></path>
                        <path
                            d="M33.81 0 M33.81 0 C205.8 -1.52, 379.73 -1.42, 480.74 0 M33.81 0 C126.88 0.93, 221.28 0.05, 480.74 0 M480.74 0 C500.6 -0.35, 515.15 14.59, 514.55 33.81 M480.74 0 C503.34 4.33, 515.06 8.45, 514.55 33.81 M514.55 33.81 C518.04 61.98, 512.19 89.42, 514.55 101.43 M514.55 33.81 C515 57.65, 514.79 84.78, 514.55 101.43 M514.55 101.43 C511.75 120.34, 501.52 131.58, 480.74 135.25 M514.55 101.43 C516.08 127.91, 498.83 138.91, 480.74 135.25 M480.74 135.25 C382.46 132.3, 288.12 133.18, 33.81 135.25 M480.74 135.25 C307.75 136.58, 135.9 137.47, 33.81 135.25 M33.81 135.25 C14.76 138.85, 0.12 120.69, 0 101.43 M33.81 135.25 C9.51 131.52, 4.01 126.25, 0 101.43 M0 101.43 C0.93 75.35, -2.27 52.07, 0 33.81 M0 101.43 C-0.91 77.68, 2.23 51.01, 0 33.81 M0 33.81 C-0.8 14.94, 14.96 -1.27, 33.81 0 M0 33.81 C-2.89 8.91, 14.95 -0.19, 33.81 0"
                            stroke="#5c940d" stroke-width="4" fill="none"></path>
                    </g>
                    <g transform="translate(27.950493448723137 10) rotate(0 237 69.5)"><text x="237"
                            y="97" font-family="Virgil, Segoe UI Emoji" font-size="109.00000000000001px"
                            fill="#5c940d" text-anchor="middle" style="white-space: pre;"
                            direction="ltr">Granjapp</text></g>
                </svg>


            </div>
            <div class="position-absolute bottom-0 end-0 translate-middle">
                <img src="/images/bbb.png" alt="" style="height: 150px">

            </div>
        </div>

        <div class="container">

            @guest

                <x-layout-public.about />

            @endguest
            <!-- Products -->
            <x-layout-public.products :products="$products"/>

            @guest

            <!-- Contact -->
            <x-layout-public.contact />

            @endguest
        </div>

    </x-layout-public>
</x-layout>