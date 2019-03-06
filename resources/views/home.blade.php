<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tailwind Travel</title>
  </head>
  <body class="text-grey-8 font-sans leading-normal antialiased">
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('/img/hero-bg.jpg')">
      <div class="px-6 max-w-5xl mx-auto pb-20">
        <nav class="flex items-center py-5 border-b border-white-20">
          <div>
            <svg class="block h-10 w-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40c11.046 0 20-8.954 20-20S31.046 0 20 0 0 8.954 0 20s8.954 20 20 20z" fill="#fff"/><path d="M20 26.094l-8.594 1.82c-.857.38-1.72-.522-1.3-1.361l9-18a1 1 0 0 1 1.788 0l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095z" fill="#6D9CCB"/><path d="M20 8c.355 0 .71.184.894.553l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095V8z" fill="#16518C"/></svg>
          </div>
          <div class="hidden md:flex flex-1 items-center justify-between">
            <div class="flex items-center">
              <a href="#" class="ml-8 text-white no-underline font-bold">Flights</a>
              <a href="#" class="ml-8 text-white no-underline font-bold">Hotels</a>
              <a href="#" class="ml-8 text-white no-underline font-bold">Cars</a>
              <a href="#" class="ml-8 text-white no-underline font-bold">Vacations</a>
              <a href="#" class="ml-8 text-white no-underline font-bold">Deals</a>
            </div>
            <div>
              <a href="#" class="text-white no-underline font-bold">Trips</a>
              <a href="#" class="inline-block ml-8 border border-white-20 rounded px-4 py-2 leading-tight text-white no-underline font-bold hover:bg-white-20 hover:border-transparent">
                Sign in
              </a>
            </div>
          </div>
          <div class="md:hidden flex-1 text-right">
            <button type="button" class="inline-block border border-white-20 rounded px-4 py-2 leading-tight text-white no-underline font-bold">
              Menu
            </button>
          </div>
        </nav>
        <div class="text-center pt-12 pb-16">
          <h1 class="text-3xl sm:text-4xl md:text-5xl text-white leading-none">Where will you be flying today?</h1>
          <p class="mt-2 text-xl sm:text-2xl md:text-3xl text-blue-accent">Travel the world at prices you wouldn't believe.</p>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-xl">
          <div class="px-8 py-6">
            <div class="flex items-center">
              <label class="form-radio-group">
                <input type="radio" name="trip_type" value="round_trip" checked>
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">Round trip</span>
              </label>
              <label class="form-radio-group ml-8">
                <input type="radio" name="trip_type" value="one_way" checked>
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">One-way</span>
              </label>
              <label class="form-radio-group ml-8">
                <input type="radio" name="trip_type" value="round_trip" checked>
                <span class="form-radio-indicator" aria-hidden></span>
                <span class="form-radio-label">Multi-city</span>
              </label>
            </div>
            <div class="flex flex-wrap -mx-1 mt-6">
              <label class="w-full sm:w-1/2 lg:w-1/4 px-1">
                <span class="block text-sm font-semibold">Origin City</span>
                <span class="mt-1 relative block w-full">
                  <span class="absolute pin-y pin-l flex items-center pointer-events-none pl-2">
                    <svg class="block w-6 h-6 text-grey-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.636 3.597a8.775 8.775 0 0 0 0 12.54l5.657 5.574a1.01 1.01 0 0 0 1.414 0l5.657-5.573a8.776 8.776 0 0 0 0-12.54C14.849.133 9.151.133 5.636 3.597zM9 9.867c0 1.633 1.343 2.956 3 2.956s3-1.323 3-2.955c0-1.633-1.343-2.956-3-2.956S9 8.235 9 9.868z"/></svg>
                  </span>
                  <input class="block w-full pl-10 pr-4 py-3 text-grey-8 bg-grey-1 focus:bg-white focus:outline-none border border-grey-2 rounded" value="Toronto, ON">
                </span>
              </label>
              <label class="mt-4 sm:mt-0 w-full sm:w-1/2 lg:w-1/4 px-1">
                <span class="block text-sm font-semibold">Destination</span>
                <span class="mt-1 relative block w-full">
                  <span class="absolute pin-y pin-l flex items-center pointer-events-none pl-2">
                    <svg class="block w-6 h-6 text-grey-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.636 3.597a8.775 8.775 0 0 0 0 12.54l5.657 5.574a1.01 1.01 0 0 0 1.414 0l5.657-5.573a8.776 8.776 0 0 0 0-12.54C14.849.133 9.151.133 5.636 3.597zM9 9.867c0 1.633 1.343 2.956 3 2.956s3-1.323 3-2.955c0-1.633-1.343-2.956-3-2.956S9 8.235 9 9.868z"/></svg>
                  </span>
                  <input class="block w-full pl-10 pr-4 py-3 text-grey-8 bg-grey-1 focus:bg-white focus:outline-none border border-grey-2 rounded" value="San Francisco, CA">
                </span>
              </label>
              <label class="mt-4 lg:mt-0 w-full sm:w-1/2 lg:w-1/4 px-1">
                <span class="block text-sm font-semibold">Depart / Return</span>
                <span class="mt-1 relative block w-full">
                  <span class="absolute pin-y pin-l flex items-center pointer-events-none pl-2">
                    <svg class="block w-6 h-6 text-grey-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.707 2.293A1 1 0 0 0 6 3v1H5c-1.1 0-2 .9-2 2v13a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 0 0-2 0v1H8V3a1 1 0 0 0-.293-.707zM5 19V9h14v10H5z"/></svg>
                  </span>
                  <input class="block w-full pl-10 pr-4 py-3 text-grey-8 bg-grey-1 focus:bg-white focus:outline-none border border-grey-2 rounded" value="Sun 14/4 – Thu 18/4">
                </span>
              </label>
              <label class="mt-4 lg:mt-0 w-full sm:w-1/2 lg:w-1/4 px-1">
                <span class="block text-sm font-semibold">Travellers</span>
                <span class="mt-1 relative block w-full">
                  <span class="absolute pin-y pin-l flex items-center pointer-events-none pl-2">
                    <svg class="block w-6 h-6 text-grey-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm3 11v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5z"/></svg>
                  </span>
                  <input class="block w-full pl-10 pr-4 py-3 text-grey-8 bg-grey-1 focus:bg-white focus:outline-none border border-grey-2 rounded" value="1 Adult">
                </span>
              </label>
            </div>
          </div>
          <div class="sm:flex items-center justify-between bg-grey-1 px-8 pt-3 pb-5 sm:pb-3">
            <div class="flex items-center">
              <label class="w-1/2 sm:w-auto flex items-center">
                <input type="checkbox" name="add_hotel">
                <span class="ml-3">Add a hotel</span>
              </label>
              <label class="w-1/2 sm:w-auto flex items-center sm:ml-12">
                <input type="checkbox" name="add_car">
                <span class="ml-3">Add a car</span>
              </label>
            </div>
            <div class="mt-3 sm:mt-0 flex items-center">
              <button class="flex items-center justify-center w-full sm:inline-inline-flex sm:w-auto bg-yellow-4 hover:bg-yellow-5 font-bold text-yellow-9 rounded px-4 py-3 focus:outline-none focus:shadow-outline">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.32 14.906l1.096 1.096c.412-.022.83.123 1.145.437l3 3a1.5 1.5 0 0 1-2.122 2.122l-3-3a1.497 1.497 0 0 1-.437-1.145l-1.096-1.096a8 8 0 1 1 1.414-1.414zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                Search Flights
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
