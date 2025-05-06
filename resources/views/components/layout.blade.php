<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- head content остается без изменений -->
  <body>
    <div class="min-h-screen bg-gray-100">
      {{ $slot }}
    </div>
  </body>
</html>
