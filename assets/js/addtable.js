
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("datatabel").deleteRow(i);
}

function myFunction(r) {
    var i = r.reset;
    var u = r.reset;
    document.getElementById("form").reset(i);
    document.getElementById("form-horizontal").reset(u);
}

function clearForm(myFormElement) {

  var elements = myFormElement.elements;

  myFormElement.reset();

  for(i=0; i<elements.length; i++) {

  field_type = elements[i].type.toLowerCase();

  switch(field_type) {

    case "text":
    case "password":
    case "textarea":
          case "hidden":

      elements[i].value = "";
      break;

    case "radio":
    case "checkbox":
        if (elements[i].checked) {
          elements[i].checked = false;
      }
      break;

    case "select-one":
    case "select-multi":
                elements[i].selectedIndex = -1;
      break;

    default:
      break;
  }
  document.getElementById("form").reset(elements);
    }
}
//abaikan code dibawah ini karna masih coming soon

$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="mail' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}