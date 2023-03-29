<div x-cloak x-data="{isSideMenuOpen:false}">
        
    <!--Mobile Nav-->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    style="display: none;"></div>
<aside class="fixed inset-y-0 z-40 flex-shrink-0 w-64 space-y-6 overflow-y-auto bg-white xl:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="isSideMenuOpen=false"
    @keydown.escape="isSideMenuOpen=false" style="display: none;">
    <div class="mt-6 mb-4">
        <div class="p-4">
            <img src="img/easy-online-home-jobs-logo.png" alt="logo">
        </div>
        <ul class="flex flex-col font-semibold text-gray-800">
            <!-- menu with icon -->
            <li class="font-semibold">
                <a href="index.php" class="flex items-center px-4 py-2">
                    Home
                </a>
            </li>
            <li class="font-semibold">
                <a href="data-entry-jobs.php" class="flex items-center px-4 py-2">
                    Data Entry Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="form-filling-jobs.php" class="flex items-center px-4 py-2">
                    Form Filling Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="copy-paste-jobs.php" class="flex items-center px-4 py-2">
                    Copy Paste Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="writing-jobs.php" class="flex items-center px-4 py-2">
                    Writing Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="proofreading-editing-jobs.php" class="flex items-center px-4 py-2">
                    ProffReading & Editing Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="translation-jobs.php" class="flex items-center px-4 py-2">
                    Translation Jobs
                </a>
            </li>
            <li class="font-semibold">
                <a href="register.php" class="flex items-center px-4 py-2">
                    Register
                </a>
            </li>
        </ul>
    </div>
</aside>
<div class="w-full bg-white border-b shadow-md">
    <div class="flex items-center justify-center p-4 lg:px-8">
        <div class="w-full max-w-7xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div>
                        <img src="img/easy-online-home-jobs-logo.png" alt="logo">
                    </div>
                </div>
                <div>
                    <div class="hidden lg:block">
                        <ul class="flex items-center font-semibold text-gray-900">
                            <li class="relative px-4">
                                <div>
                                    <div class="relative flex items-center hover:text-orange-600">
                                        <a href="index.php">Home</a>
                                    </div>
                                </div>
                            </li>
                            <li class="relative px-4">
                                <div class="relative px-2 text-gray-900" x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false" class="relative flex items-center hover:text-orange-600">
                                        Browse Jobs
                                    </button>
                                    <ul x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 z-20 py-1 mt-2 overflow-hidden font-normal bg-white border rounded shadow w-72">
                                        <li class="font-semibold">
                                            <a href="data-entry-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                Data Entry Jobs
                                            </a>
                                        </li>
                                        <li class="font-semibold">
                                            <a href="form-filling-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                Form Filling Jobs
                                            </a>
                                        </li>
                                        <li class="font-semibold">
                                            <a href="copy-paste-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                Copy Paste Jobs
                                            </a>
                                        </li>
                                        <li class="font-semibold">
                                            <a href="writing-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                Writing Jobs
                                            </a>
                                        </li>
                                        <li class="font-semibold">
                                            <a href="proofreading-editing-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                ProffReading & Editing Jobs
                                            </a>
                                        </li>
                                        <li class="font-semibold">
                                            <a href="translation-jobs.php" class="flex items-center px-4 py-2 hover:text-orange-600">
                                                Translation Jobs
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative px-4">
                                <div>
                                    <div class="relative flex items-center hover:text-orange-600">
                                        <a href="register.php">Register</a>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="flex items-center gap-2 lg:hidden">                    
                    <button @click="isSideMenuOpen=true" aria-label="Open Menu" title="Open Menu"
                        class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 h-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>