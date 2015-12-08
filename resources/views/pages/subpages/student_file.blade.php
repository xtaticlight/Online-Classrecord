<style>
    .table-editable {
        position: relative;
        .glyphicon {
            font-size: 40px;
        }
    }
    .table-remove {
        color: #700;
        cursor: pointer;

        &:hover {
            color: #f00;
        }
    }
    .table-add {
        color: #070;
        cursor: pointer;
        position: absolute;
        top: 8px;
        right: 0;

        &:hover {
            color: #0b0;
        }
    }
</style>
<span class="clTitle">Records</span><br>
<span style="font-size:Larger;">2015-2016 - 1st Semester</span> 
<div class="pull-right">
    <select>
        <option value="mid">Mid term</option>
        <option value="final">Final Term</option>
    </select>
</div>
<br>
<div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class = "table table-hover">
        <tr>
            <th>Student No.</th>
            <th>Student Name</th>
            <th>Quiz 1 <span class="table-remove glyphicon glyphicon-minus-sign"></span> </th>
            <th>Quiz 2 <span class="table-remove glyphicon glyphicon-minus-sign"></th>
            <th>Quiz 3 <span class="table-remove glyphicon glyphicon-minus-sign"> </th>
        </tr>
        @foreach($studentData as $data)
        <tr>
            <td contenteditable="false">{{$data['Student_id']}}</td>
            <td contenteditable="false">{{$data['name']}}</td>
            <td contenteditable="true"> 70</td>
            <td contenteditable="true"> 80</td>
            <td contenteditable="true"> 90</td>

        </tr>
        @endforeach
        </table>
            </div>
            <button id="export-btn" class="btn btn-primary">Export Data</button>
            <p id="export"></p>


            <script>
                $(document).ready(function () {
                    var $TABLE = $('#table');
                    var $BTN = $('#export-btn');
                    var $EXPORT = $('#export');

                    $('.table-add').click(function () {
                        $('.table-editable').find('tr').each(function () {
                            $(this).find('th').eq(-1).after('<th><select><option id = "select"><option>Quiz</option></select> <span class="table-remove glyphicon glyphicon-minus-sign"></span> </th>');
                            $(this).find('td').eq(-1).after('<td contenteditable="true"></td>');
                        });
                    });
                    $('.table-remove').click(function () {
                        var colnum = 1;
                        alert(colnum);
                        $(this).closest("table").find("tr").find("th:eq(" + colnum + ")").remove();
                        $(this).closest("table").find("tr").find("td:eq(" + colnum + ")").remove();
                    });
                    // A few jQuery helpers for exporting only
                    jQuery.fn.pop = [].pop;
                    jQuery.fn.shift = [].shift;

                    $BTN.click(function () {
                        var $rows = $TABLE.find('tr:not(:hidden)');
                        var headers = [];
                        var data = [];

                        // Get the headers (add special header logic here)
                        $($rows.shift()).find('th:not(:empty)').each(function () {
                            headers.push($(this).text().toLowerCase());
                        });

                        // Turn all existing rows into a loopable array
                        $rows.each(function () {
                            var $td = $(this).find('td');
                            var h = {};

                            // Use the headers from earlier to name our hash keys
                            headers.forEach(function (header, i) {
                                h[header] = $td.eq(i).text();
                            });

                            data.push(h);
                        });

                        // Output the result
                        $EXPORT.text(JSON.stringify(data));
                    });

                });

            </script>
