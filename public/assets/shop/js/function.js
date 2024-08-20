const formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0,
  maximumFractionDigits: 0
});


const getBaseUrl = (fullUrl) => {
  const url = new URL(fullUrl);
  return url.origin;
}

const urlImageByType = (type) => {
  type = type.toLowerCase();
  var url;
  switch (type) {
    case 'tablet':
      url = `${window.location.origin}/assets/shop/img/tablet.png`;
      break;
    case 'syrup':
      url = `${window.location.origin}/assets/shop/img/syrup.png`;
      break;
    case 'cream':
      url = `${window.location.origin}/assets/shop/img/cream.png`;
      break;
    default:
      url = '';
      break;
  }

  return url;
}


