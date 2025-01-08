<!DOCTYPE html>
<html lang="en">

  @include('components.dashboard.head')

<body>

  @include('components.dashboard.header')

  @include('components.dashboard.sidebar')

  <main id="main" class="main">

    <section class="section dashboard">
      
      @yield('content')

    </section>

  </main>

  @include('components.dashboard.footer')

</body>

</html>