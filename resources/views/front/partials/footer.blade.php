<footer class="tw:mt-auto tw:p-6 tw:text-center tw:text-slate-400 tw:text-sm">
    &copy; {{ date('Y') }} ApplyCan Portal. All rights reserved.
</footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const icon = document.getElementById('theme-toggle-icon');
        if (icon) {
            icon.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
        }
    });

    function toggleTheme() {
        const html = document.documentElement;
        const icon = document.getElementById('theme-toggle-icon');
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            if (icon) icon.textContent = '🌙';
        } else {
            html.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            if (icon) icon.textContent = '☀️';
        }
    }
</script>
