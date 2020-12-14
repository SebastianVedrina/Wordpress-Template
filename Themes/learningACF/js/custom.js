jQuery('.gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
      enabled: true,
      navigateByImgCLick: true,
    }
    // other options
  });