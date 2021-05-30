function format2(n, currency) {
  return n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') + " " + currency;
}
document.querySelectorAll('.currency').forEach(element => {
  const val = parseInt(element.innerHTML)
  console.log(val);
  element.innerHTML = val ? format2(val, 'VNĐ') : '&nbsp&nbsp&nbsp&nbsp'
});