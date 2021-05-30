$(document).ready(() => {
  var productEdit = $('.product-edit')
  for (let item = 0; item < productEdit.length; item++) {
    $(productEdit[item]).click(() => {
      $('#edit-product input#name')[0].value = $('.product-name')[item].innerText;
      $('#edit-product input#price')[0].value = $('.product-price')[item].innerText.slice(0, -4);
      $('#edit-product input#amount')[0].value = $('.product-amount')[item].innerText;
      $('#edit-product textarea#detail')[0].value = $('.product-detail')[item].innerText;
    })
  }
  // console.log(productEdit);
})