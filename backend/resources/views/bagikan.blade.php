<!DOCTYPE html>
<html>
<head>
  <title>Tombol Bagikan</title>
  <link rel="stylesheet" href={{ asset('css/bagikan.css') }}>
</head>
<body>
  <div class="share-container">
    <button class="back-button">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
    </button>
    <span class="share-text">Bagikan</span>
    <div class="button-group">
      <button class="social-button telegram">
        <img src="telegram.svg" alt="Telegram">
      </button>
      <button class="social-button instagram">
        <img src="instagram.svg" alt="Instagram">
      </button>
      <button class="social-button gmail">
        <img src="gmail.svg" alt="Gmail">
      </button>
      <button class="social-button drive">
        <img src="drive.svg" alt="Drive">
      </button>
      <button class="social-button bluetooth">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bluetooth"><polyline points="6.5 6.5 17.5 17.5"></polyline><line x1="15" y1="15" x2="9" y2="9"></line></svg>
      </button>
      <button class="social-button more">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
      </button>
    </div>
    <button class="copy-link">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
      <span>Salin link</span>
    </button>
  </div>
</body>
</html>