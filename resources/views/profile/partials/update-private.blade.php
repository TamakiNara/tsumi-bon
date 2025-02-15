<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            公開・非公開
        </h2>
        <p class="text-gray-900 dark:text-gray-100"><a href="/{{$user->name}}" target="_blank" class="font-semibold text-blue-500 dark:text-blue-500 ">ユーザーページ</a>の公開・非公開を切り替えます</p>
        {{-- <p>TODO Share Button</p> --}}
    </header>

    <form method="post" action="{{ route('update.private') }}" class="p-6">
    @method('patch')
    @csrf
    <div class="grid grid-cols-3">
        <label class="inline-flex items-center cursor-pointer">
            <input type="hidden" value="0" name="private">
            @if ($user->private == 1)
                <input type="checkbox" id="toggle_private_button" class="sr-only peer" value="1" onclick="privateToggle()" name="private" checked>
            @else
                <input type="checkbox" id="toggle_private_button" class="sr-only peer" value="0" onclick="privateToggle()" name="private">
            @endif
        <div class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600 dark:peer-checked:bg-green-600"></div>
        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">公開</span>
        </label>
        <script>
        function privateToggle() {
            var button = document.getElementById("toggle_private_button");
            if (button.value == '1') {
                button.setAttribute('value', 0);
                button.removeAttribute("checked");
            } else {
                button.setAttribute('value', 1);
            }
        }
        </script>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </div>
    </form>
</section>
