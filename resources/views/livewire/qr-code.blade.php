<div class="w-full px-4 py-12">
    <div class="flex flex-col items-center justify-center">
        <!-- URL -->
        <p class="text-gray-700 dark:text-gray-300 mb-4 text-center print-hidden">
            This QR code points to your app URL:
        </p>

        <code class="text-sm text-white bg-gray-200 dark:bg-gray-800 px-2 py-1 rounded mb-4 print-hidden">
            {{ config('app.url') . '/attendance' }}
        </code>

        <!-- Print Area -->
        <div id="print-area" class="flex flex-col items-center justify-center space-y-4">
            <!-- Logo and Text Side by Side on Print -->
            <div class="print-visible hidden print:flex print:items-center print:justify-center print:gap-4">
                <img src="{{ asset('images/AIA.svg') }}" alt="Logo" class="w-32 h-auto print:w-48">

                <div class="print:text-center mt-0">
                    <h2 class="text-lg font-semibold text-gray-800 print:mb-6">
                        AIA Philippines - Cebu Esma District
                    </h2>
                    <h2 class="text-lg font-semibold text-gray-800">
                        BOP Attendance
                    </h2>
                    <h2 class="text-lg font-semibold text-gray-800">
                        SCAN HERE
                    </h2>
                </div>
            </div>

            <!-- QR Code Image -->
            <img src="{{ $url }}" alt="QR Code"
                class="w-40 h-40 rounded shadow-lg border border-gray-300 dark:border-gray-700">
        </div>

        <!-- Print Button -->
        <button onclick="printQr()"
            class="mt-6 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow">
            Print QR Code
        </button>

        <!-- Script -->
        <script>
            function printQr() {
                window.print();
            }
        </script>

        <!-- Print Styles -->
        <style>
            @media print {
                body {
                    background: white !important;
                    margin: 0;
                    padding: 0;
                }

                body * {
                    visibility: hidden;
                }

                #print-area,
                #print-area * {
                    visibility: visible;
                }

                #print-area {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                }

                .print-hidden {
                    display: none !important;
                }

                .print-visible {
                    display: block !important;
                }

                #print-area img {
                    display: block;
                    margin: 0 auto;
                }
            }

            .print-visible {
                display: none;
            }
        </style>
    </div>
</div>
