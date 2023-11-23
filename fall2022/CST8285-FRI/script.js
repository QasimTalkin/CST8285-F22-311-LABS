var myMenuItems = [
  {
    id:1,
    title: 'HTML Node'
  },
  {
    id:2,
    title: 'Dom'
  },
  {
    id:3,
    title: 'Events'
  },
  {
    id:4,
    title: 'git but maybe'
  },
  {
    id:5,
    title: 'Build Game'
  },
  {
    id:6,
    title: 'RegEx'
  } 
]
function showList(){
  for (item of myMenuItems){
    var listItem = document.createElement('li')
    listItem.textContent = item.title
    listItem.setAttribute('id', item.id)
    listItem.setAttribute('style', "color:red, font-size:25px") // add multiple style
    document.getElementById('menuItems').appendChild(listItem)
  }
}


showList()

var myBody = document.body



var myButton = document.getElementById('switch');

myButton.addEventListener('click', changeColor)

var currentStyle = 'default'

function changeColor() {
  console.log(event);
  if (currentStyle === 'default'){
    myBody.setAttribute('class', 'light')
    currentStyle = 'light'
  } else {
    myBody.classList.remove('light')
    currentStyle = 'default'
  }


}

var sortButton = document.createElement('button')
sortButton.textContent = 'Click to Sort'
sortButton.style.padding = '10px';
var myList = document.querySelector('#myList');
myList.prepend(sortButton)
sortButton.addEventListener('click', sortList)
function sortList() {
  myMenuItems.sort((item1, item2)=>{return item2.id - item1.id})
  console.log(myMenuItems);
  document.getElementById('menuItems').innerHTML = ''
  showList();
}


var inputText = document.createElement('input');

myList.append(inputText)

myList.addEventListener('keyup', filterList)




































