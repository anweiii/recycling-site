var pp = {
    name:"Plastic 5: PP (Polypropylene)", 
    recyclableStatus:"Sometimes Recyclable",
    desc:"Polypropylene is used to make plastic containers for food products like yogurt, margarine, and whipped topping. However, it can also be used to make non-recyclable textiles. Check the bottom of your container to make sure it is recycable, and make sure to rinse any excess food products from the container", 
    searchTerms:["polypropylene","plastic 5","pp","plastic #5","plastic number 5","plastic number five","number five plastic","five", "5", "plastic"]
}
var newsprint = {
    name:" Newsprint", 
    recyclableStatus: "Recyclable",
    desc: "Newsprint is a heavily produced product, and luckily it is highly recyclable! In fact, recycling all daily newspapers in Austin would provide enough material to replace 2/3 of an acre of forest. Be sure to always recycle your newsprint instead of putting it in a landfill.", 
    searchTerms:["newspaper","newsprint","news", "paper"]
}
var aluminum = {
  name:"Aluminum",
  recyclableStatus: "Recyclable",
  desc:"Like most metals, Aluminum is recyclable. It is commonly used in cans, and even aluminum alloys are recyclable. If it looks like metal, it's probably recyclable",
  searchTerms:[ "aluminum","aluminium","tin", "metal"]
}

var pvc = {
  name:"Plastic 3: PVC (Polyvinyl chloride)",
  recyclableStatus: "NOT Recyclable",
  desc: "PVC is best known in pipe form, but it is also used in children's toys, tray, and in furniture. Unfortunately, it cannot be recycled.",
  searchTerms:["pvc","plastic 3","3","plastic"]
}

var corrugated = {
  name:"Corrugated Materials",
  recyclableStatus: "Recyclable",
  desc: "Corrugated materials, like cardboard boxes, are paper-based and very recyclable. In fact, the corrogated center of most of these materials are already 100% recycled. They are the most recycled paper product, and should never be thrown away unless they are soiled or otherwise contaminated.",
  searchTerms:[ "cardboard","corrugated cardboard","boxes", "paper"]
}
var pete = {
  name:"Plastic 1: PETE (Polyethylene terephthalate)",
  recyclableStatus: "Recyclable",
  desc: "PETE is commonly used in one time use water bottles, beverage cups, and cooking oil containers. It is often very thin plastic that can be easily bent. PETE is usually indicated on the bottom of these containers with the number 1. Be sure to clean this material before recycling.",
  searchTerms:[ "plastic","plastic 1","pete"]
}
var ceramic = {
  name:"Ceramic",
  recyclableStatus: "NOT Recyclable",
  desc: "Ceramic materials are made from fired clay, which involves a chemical reaction that cannot be reversed, so it cannot be recycled. Bowls, mugs, and decorative items are often made out of ceramic materials. Instead of disposing of functional pieces, check out the <a href=https://theaustincommon.com/austin-reuse-directory/get-rid-of/> Austin Reuse Directory</a>",
  searchTerms:[ "ceramic","pottery","clay"]
}
var x = {
  name:"",
  recyclableStatus: "",
  desc: "",
  searchTerms:[ "","","", ""]
}
var x = {
  name:"",
  recyclableStatus: "",
  desc: "",
  searchTerms:[ "","","", ""]
}


materials = [pp,newsprint,aluminum,pvc,corrugated, pete, ceramic]





var allOpen = false
      
function loadDoc() {
  if (!allOpen) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText
         document.getElementById("results").innerHTML = ""
        document.getElementById("showButton").innerHTML = "Hide Recyclables"
      }
    };
    xhttp.open("GET", "recyclables.txt", true);
    xhttp.send();
    allOpen = true
  } else {
    document.getElementById("demo").innerHTML = '<br>'
    document.getElementById("showButton").innerHTML = "Show All Recyclables"
    allOpen = false
  }
}

function searchMaterials(x) {
  var keyword = x
  searchResults = []
  console.log(document.getElementById("matSearch").innerHTML)
  
  for (i = 0; i < materials.length; i++) {
    for (j = 0; j < materials[i].searchTerms.length; j++) {
      if (keyword == materials[i].searchTerms[j]) {
        searchResults.push(materials[i])
      }
    }
  }
  if (searchResults.length == 0){
    document.getElementById("results").innerHTML = "<br> No results fit your search"
  } else {
    displayResults(searchResults)
  }
  
}
function displayResults(materialResults) {
    document.getElementById("results").innerHTML += '<table id="resultTable"></table> '
    dispText = "<br>"
  for (i = 0; i < materialResults.length; i++) {
    dispText += ' <table id = "table2"><tr><td rowspan="2" ><img src="logo.png" alt="Logo" width="50" height="50"></td> <th colspan = "8">'+materialResults[i].name+'</th> </tr><tr><td colspan= "8">'+materialResults[i].recyclableStatus+'</td> </tr><tr><td colspan = "10" rowspan="8">'+materialResults[i].desc+'</td></tr></table> '
  }
  console.log (dispText)
  document.getElementById("results").innerHTML = dispText
}