<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jual ruko</title>
    <link rel="stylesheet" href="{{ asset('css/jual.css') }}">
</head>
<body>
    <div class="nav">
        <div class="hemm">
          <div class="sewa"><h3>Disewa</h3></div>
          <div class="jual"><h3>Dijual</h3></div>
        </div>
        <div class="haha">
            <div class="harga"><h3>Harga</h3></div>
            <div class="filter"><h3>Filter</h3></div>
        </div>
        <div class="search-container">
            <form id="search-form">
              <div class="search-box">
                <input
                  type="text"
                  class="search-input"
                  placeholder="Cari sesuatu..."
                  name="q"
                  id="search-input"
                />
                <button type="submit" class="search-button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M10 2a8 8 0 105.293 14.293l5.707 5.707a1 1 0 001.414-1.414l-5.707-5.707A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/>
                  </svg>
                </button>
              </div>
            </form>
            <div id="search-results" class="results-container"></div>
          </div>
    </div>

    <div class="container">

    </div>
</body>
</html>
