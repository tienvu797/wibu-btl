function format(param) {
  return param.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',') + " VNĐ";
}
function convert(param) {
  let val = parseInt(param);
  return val ? format(val, 'VNĐ') : ''
}
function revert(param) {
  return param === '0 VNĐ' ? 0 : parseInt(param.replaceAll(',', '').slice(0, -4))
}
function changeData(element, i) {
  let valPrice = revert(price[i].innerHTML)
  console.log(i);
  let valAmount = element.value
  let valDiscount = parseInt(discount[i].innerHTML)

  let valTemp = valPrice * valAmount
  let valFinal = valTemp * (100 - valDiscount) / 100
  output[i].value = valFinal

  valTemp = format(valTemp)
  valFinal = format(valFinal)

  temp[i].innerHTML = valTemp
  final[i].innerHTML = valFinal

  calSum()
}
function calSum() {
  let valSum = 0;
  Array.from(final).forEach(element => {
    valSum+=revert(element.innerHTML)
  });
  // let valSum = Array.from(final).reduce(
  //   (ele1, ele2) => revert(ele1.innerHTML) + revert(ele2.innerHTML))
  valSum = format(valSum) ? format(valSum) : '0 VNĐ'
  sum.innerHTML = valSum
}

const price = document.getElementsByClassName('price')
const amount = document.querySelectorAll('input[type=number]')
const temp = document.getElementsByClassName('temp')
const discount = document.getElementsByClassName('discount')
const final = document.getElementsByClassName('final')
const output = document.getElementsByClassName('output')
const sum = document.getElementById('sum')

document.querySelectorAll('.currency').forEach(element => element.innerHTML = convert(element.innerHTML))

for (let i = 0; i < amount.length; i++) {
  const element = amount[i]
  changeData(element, i)
}