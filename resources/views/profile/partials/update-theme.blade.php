<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            テーマの変更
        </h2>
    </header>

    <form method="post" action="{{ route('theme.update') }}" class="p-6">
    @method('patch')
    @csrf
    <div class="grid grid-cols-3">

        <label class="inline-flex items-center cursor-pointer">
            <input type="hidden" value="0" name="theme">
            @if ($user->theme == 1)
                <input type="checkbox" id="toggle_theme_button" class="sr-only peer" value="1" onclick="themeToggle()" name="theme" checked>
            @else
                <input type="checkbox" id="toggle_theme_button" class="sr-only peer" value="0" onclick="themeToggle()" name="theme">
            @endif
            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ダークモード</span>
        </label>
        <script>
        function themeToggle() {
            var button = document.getElementById("toggle_theme_button");
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
