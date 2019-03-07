<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tailwind Travel</title>
  </head>
  <body class="text-grey-8 font-sans leading-normal antialiased">
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('/img/hero-bg.jpg');">
      <div class="max-w-5xl mx-auto px-6">

        <nav class="flex items-center py-5 border-b border-white-20">
          <div class="flex items-center">
            <svg class="h-10 w-10" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40c11.046 0 20-8.954 20-20S31.046 0 20 0 0 8.954 0 20s8.954 20 20 20z" fill="#fff"/><path d="M20 26.094l-8.594 1.82c-.857.38-1.72-.522-1.3-1.361l9-18a1 1 0 0 1 1.788 0l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095z" fill="#6D9CCB"/><path d="M20 8c.355 0 .71.184.894.553l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095V8z" fill="#16518C"/></svg>
          </div>
          <div class="flex-grow text-right md:hidden">
            <button type="button" class="ml-6 inline-block border border-white-20 rounded px-4 py-2 leading-tight text-white font-bold no-underline">
              Menu
            </button>
          </div>
          <div class="hidden fixed pin bg-blue-9 z-50 px-10 py-16 text-center md:static md:pin-none md:z-auto md:bg-transparent md:p-0 md:text-left md:flex md:flex-grow md:items-center md:justify-between">
            <div class="md:hidden absolute pin-t pin-r pt-4 pr-4">
              <button type="button" class="block">
                <svg class="block h-12 w-12 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/></svg>
              </button>
            </div>
            <div>
              <a href="#" class="block md:inline md:ml-8 text-white font-bold no-underline">Flights</a>
              <a href="#" class="block mt-4 md:mt-0 md:inline md:ml-6 text-white font-bold no-underline">Hotels</a>
              <a href="#" class="block mt-4 md:mt-0 md:inline md:ml-6 text-white font-bold no-underline">Cars</a>
              <a href="#" class="block mt-4 md:mt-0 md:inline md:ml-6 text-white font-bold no-underline">Vacations</a>
              <a href="#" class="block mt-4 md:mt-0 md:inline md:ml-6 text-white font-bold no-underline">Deals</a>
            </div>
            <div>
              <a href="#" class="block mt-4 md:inline md:mt-0 text-white font-bold no-underline">Trips</a>
              <a href="#" class="block mt-4 md:inline-block md:mt-0 md:ml-6 border border-white-20 rounded px-4 py-2 leading-tight text-white font-bold no-underline">
                Sign in
              </a>
            </div>
          </div>
        </nav>

        <div class="text-center pt-12 pb-16">
          <h1 class="leading-tight text-5xl text-white">Where will you be flying today?</h1>
          <p class="text-3xl text-blue-accent">Travel the world at prices you wouldn&rsquo;t believe.</p>
        </div>

        <form action="#" method="POST" class="max-w-3xl mx-auto lg:max-w-full rounded-lg overflow-hidden">
          <div class="bg-white px-8 py-6">
            <div class="flex">
              <label class="form-radio-group">
                <input type="radio" name="trip_type" value="round_trip">
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">Round trip</span>
              </label>
              <label class="ml-8 form-radio-group">
                <input type="radio" name="trip_type" value="one_way" checked>
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">One-way</span>
              </label>
              <label class="ml-8 form-radio-group">
                <input type="radio" name="trip_type" value="multi_city">
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">Multi-city</span>
              </label>
            </div>
            <div class="flex flex-wrap -mx-2 mt-4">
              <label class="w-full sm:w-1/2 lg:w-1/4 px-2">
                <span class="font-semibold text-sm">Origin City</span>
                <span class="mt-1 form-input-group">
                  <span class="form-input-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.636 3.597a8.775 8.775 0 0 0 0 12.54l5.657 5.574a1.01 1.01 0 0 0 1.414 0l5.657-5.573a8.776 8.776 0 0 0 0-12.54C14.849.133 9.151.133 5.636 3.597zM9 9.867c0 1.633 1.343 2.956 3 2.956s3-1.323 3-2.955c0-1.633-1.343-2.956-3-2.956S9 8.235 9 9.868z"/></svg>
                  </span>
                  <input class="form-input" value="Toronto, ON">
                </span>
              </label>
              <label class="w-full mt-4 sm:w-1/2 sm:mt-0 lg:w-1/4 px-2">
                <span class="font-semibold text-sm">Destination</span>
                <span class="mt-1 form-input-group">
                  <span class="form-input-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.636 3.597a8.775 8.775 0 0 0 0 12.54l5.657 5.574a1.01 1.01 0 0 0 1.414 0l5.657-5.573a8.776 8.776 0 0 0 0-12.54C14.849.133 9.151.133 5.636 3.597zM9 9.867c0 1.633 1.343 2.956 3 2.956s3-1.323 3-2.955c0-1.633-1.343-2.956-3-2.956S9 8.235 9 9.868z"/></svg>
                  </span>
                  <input class="form-input" value="San Francisco, CA">
                </span>
              </label>
              <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                <span class="font-semibold text-sm">Depart / Return</span>
                <span class="mt-1 form-input-group">
                  <span class="form-input-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.707 2.293A1 1 0 0 0 6 3v1H5c-1.1 0-2 .9-2 2v13a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 0 0-2 0v1H8V3a1 1 0 0 0-.293-.707zM5 19V9h14v10H5z"/></svg>
                  </span>
                  <input class="form-input" value="Sun 14/4 – Thu 18/4">
                </span>
              </label>
              <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                <span class="font-semibold text-sm">Travellers</span>
                <span class="mt-1 form-input-group">
                  <span class="form-input-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm3 11v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5z"/></svg>
                  </span>
                  <input class="form-input" value="1 Adult">
                </span>
              </label>
            </div>
          </div>
          <div class="bg-grey-1 px-8 py-3 flex items-center justify-between">
            <div class="flex">
              <label>
                <input type="checkbox" name="add_hotel" value="true">
                <span class="ml-2">Add a hotel</span>
              </label>
              <label class="ml-8">
                <input type="checkbox" name="add_car" value="true">
                <span class="ml-2">Add a car</span>
              </label>
            </div>
            <div>
              <button type="submit" class="inline-flex items-center focus:outline-none focus:shadow-outline leading-tight bg-yellow-4 hover:bg-yellow-3 text-yellow-9 font-bold rounded px-5 py-3">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.32 14.906l1.096 1.096c.412-.022.83.123 1.145.437l3 3a1.5 1.5 0 0 1-2.122 2.122l-3-3a1.497 1.497 0 0 1-.437-1.145l-1.096-1.096a8 8 0 1 1 1.414-1.414zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                <span class="ml-2">Search Flights</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
