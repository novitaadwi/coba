<nav class="bg-gray-900 p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <div>
            <a href="/" class="text-2xl font-bold text-white">Laravel UTS PWEB</a>
        </div>
      
        <ul class="flex space-x-6">
            <li>
                <a href="{{ url('/login') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition">Login</a>
            </li>
            <li>
                <a href="{{ url('/register') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition">Register</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition">Contact</a>
            </li>
        </ul>
    </div>
</nav>


