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

        <nav class="flex justify-between items-center py-5 border-b border-white-20">
          <div class="flex items-center">
            <svg class="h-10 w-10" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40c11.046 0 20-8.954 20-20S31.046 0 20 0 0 8.954 0 20s8.954 20 20 20z" fill="#fff"/><path d="M20 26.094l-8.594 1.82c-.857.38-1.72-.522-1.3-1.361l9-18a1 1 0 0 1 1.788 0l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095z" fill="#6D9CCB"/><path d="M20 8c.355 0 .71.184.894.553l9 18c.42.839-.443 1.742-1.3 1.36L20 26.095V8z" fill="#16518C"/></svg>
            <a href="#" class="ml-8 text-white font-bold no-underline">Flights</a>
            <a href="#" class="ml-6 text-white font-bold no-underline">Hotels</a>
            <a href="#" class="ml-6 text-white font-bold no-underline">Cars</a>
            <a href="#" class="ml-6 text-white font-bold no-underline">Vacations</a>
            <a href="#" class="ml-6 text-white font-bold no-underline">Deals</a>
          </div>
          <div>
            <a href="#" class="text-white font-bold no-underline">Trips</a>
            <a href="#" class="ml-6 inline-block border border-white-20 rounded px-4 py-2 leading-tight text-white font-bold no-underline">Sign in</a>
          </div>
        </nav>

        <div class="text-center pt-12 pb-16">
          <h1 class="leading-tight text-5xl text-white">Where will you be flying today?</h1>
          <p class="text-3xl text-blue-accent">Travel the world at prices you wouldn&rsquo;t believe.</p>
        </div>

        <form action="#" method="POST" class="max-w-3xl mx-auto lg:max-w-full rounded-lg overflow-hidden">
          <div class="bg-white px-8 py-6">
            <div class="flex">
              <label>
                <input type="radio" name="trip_type" value="round_trip">
                <span class="ml-2">Round trip</span>
              </label>
              <label class="ml-8">
                <input type="radio" name="trip_type" value="one_way">
                <span class="ml-2">One-way</span>
              </label>
              <label class="ml-8">
                <input type="radio" name="trip_type" value="multi_city">
                <span class="ml-2">Multi-city</span>
              </label>
            </div>
            <div class="flex flex-wrap -mx-2 mt-4">
              <label class="w-full sm:w-1/2 lg:w-1/4 px-2">
                <span class="font-semibold text-sm">Origin City</span>
                <input class="form-input mt-1" value="Toronto, ON">
              </label>
              <label class="w-full mt-4 sm:w-1/2 sm:mt-0 lg:w-1/4 px-2">
                <span class="font-semibold text-sm">Destination</span>
                <input class="form-input mt-1" value="San Francisco, CA">
              </label>
              <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                <span class="font-semibold text-sm">Depart / Return</span>
                <input class="form-input mt-1" value="Sun 14/4 – Thu 18/4">
              </label>
              <label class="w-full sm:w-1/2 mt-4 lg:w-1/4 lg:mt-0 px-2">
                <span class="font-semibold text-sm">Travellers</span>
                <input class="form-input mt-1" value="1 Adult">
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
              <button type="submit" class="focus:outline-none focus:shadow-outline leading-tight bg-yellow-4 hover:bg-yellow-3 text-yellow-9 font-bold rounded px-5 py-3">Search Flights</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
