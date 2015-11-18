<!DOCTYPE html>
<html class=""><head>
<link rel="stylesheet prefetch" href="./assets/css/jquery-ui.css"><link rel="stylesheet prefetch" href="./assets/css/bootstrap.min.css">
<style class="cp-pen-styles">.table-editable {
  position: relative;
}
.table-editable .glyphicon {
  font-size: 20px;
}

.table-remove {
  color: #700;
  cursor: pointer;
}
.table-remove:hover {
  color: #f00;
}

.table-up, .table-down {
  color: #007;
  cursor: pointer;
}
.table-up:hover, .table-down:hover {
  color: #00f;
}

.table-add {
  color: #070;
  cursor: pointer;
  position: absolute;
  top: 8px;
  right: 0;
}
.table-add:hover {
  color: #0b0;
}
</style></head><body>
<div class="container">
  <h1>HTML5 Editable Table</h1>
  <p>Through the powers of <strong>contenteditable</strong> and some simple jQuery you can easily create a custom editable table. No need for a robust JavaScript library anymore these days.</p>
  
  <ul>
    <li>An editable table that exports a hash array. Dynamically compiles rows from headers</li> 
    <li>Simple / powerful features such as add row, remove row, move row up/down.</li>
  </ul>
  
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <div style="overflow:auto;">
    <table class="table">
        <tbody><tr>
        <th>Name  </th>
        <th>Quiz1</th>
        <th>Quiz2</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
          <td contenteditable="true">Stir Fry</td>
          <td><input type="text" name="quiz1"/></td>
          <td><div><input type="text" name="quiz1"/></div></td>
        <td>
          
        </td>
        <td>
            
        </td>

      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Untitled</td>
        <td contenteditable="true">undefined</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </tbody></table>
    </div>
  </div>
  
  <button id="export-btn" class="btn btn-primary">Export Data</button>
  <p id="export"></p>
</div>
<script src="./assets/js/stopExecutionOnTimeout.js"></script><script src="./assets/js/jquery.min.js"></script><script src="./assets/js/jquery-ui.min.js"></script><script src="./assets/js/bootstrap.min.js"></script><script src="./assets/js/underscore.js"></script>
<script>
var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

iter = 3;
for ($x = 0; $x <= 3; $x++) {
    $TABLE.find('tr').each(function(){
           var trow = $(this);
             if(trow.index() === 0){
                 trow.append('<th>Quiz'+iter+'</th>');
             }else{
                 trow.append('<td><input type="text" name="quiz'+iter+'"/></td>');
             }
            
         });
         iter += 1;
} 
         

$('.table-remove').click(function () {
    $(this).parents('tr').detach();
});
$('.table-up').click(function () {
    var $row = $(this).parents('tr');
    if ($row.index() === 1)
        return;
    $row.prev().before($row.get(0));
});
$('.table-down').click(function () {
    var $row = $(this).parents('tr');
    $row.next().after($row.get(0));
});
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;
$BTN.click(function () {
    var $rows = $TABLE.find('tr:not(:hidden)');
    var headers = [];
    var data = [];
    $($rows.shift()).find('th:not(:empty)').each(function () {
        headers.push($(this).text().toLowerCase());
    });
    $rows.each(function () {
        var $td = $(this).find('td');
        var h = {};
        headers.forEach(function (header, i) {
            h[header] = $td.eq(i).text();
        });
        data.push(h);
    });
    $EXPORT.text(JSON.stringify(data));
});
//@ sourceURL=pen.js
</script>
<script src="./assets/js/css_live_reload_init.js"></script>

<form name="myform" id="myform">
    <table id="blacklistgrid">
        <tr id="Row1">
            <td class="space">&nbsp;</td>
            <td>Quiz1</td>
            <td>Quiz2</td>
        </tr>
        <tr id="Row2">
            <td>
                <input type="text" placeholder="shade" name="shade" />
            </td>
            <td>
                <input type="text" name="red" />
            </td>
            <td>
                <input type="text" name="yellow" />
            </td>
        </tr>

    </table>
    <button type="button" id="btnAdd">Add few more Rows!</button>
    </br>
    </br>
    <button type="button" id="btnAddCol">Add new column</button>
    </br>
    </br>
    <input type="submit"></input>
</form>

<script>
 $(document).ready(function () {
     $('#btnAdd').click(function () {
         var count = 3,
             first_row = $('#Row2');
         while (count-- > 0) first_row.clone().appendTo('#blacklistgrid');
     });

     
     var myform = $('#myform'),
         iter = 1;
     $('#btnAddCol').click(function () {
         myform.find('tr').each(function(){
           var trow = $(this);
             if(trow.index() === 0){
                 trow.append('<td>Quiz'+iter+'</td>');
             }else{
                 trow.append('<td><input type="text" name="cb'+iter+'"/></td>');
             }
            
         });
         iter += 1;
     });
 });
</script>
<div class="container" style="overflow:auto">
<div class="table-editable">
    <table class="table">
        <tbody>
            <tr>
                <th>hello!</th>
                <th>ge!</th>
            </tr>
            <tr>
                <td>
                    <p>hey!</p>
                </td>
                <td>
                    <p>go!</p>
                </td>
            </tr>

        </tbody>
    </table>
</div>
</div>
</body></html>