
<span class="clTitle">Class Records</span><br>
<span style="font-size:Larger;">2015-2016 - 1st Semester</span> 
<br>
<br>
<div id="table" class="table-editable">

    <table class = "table table-bordered">
        <tr class = "TableHeader"> 
            <th  >ID No.</th>
            <th>Name</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q1</th>
            <th>Q2</th>
       
            <th style = "background-color: gainsboro;"> <a href="#"><span class="table-add glyphicon glyphicon-plus"></a></span></th>
            <th>ME</th>
            <th>MG</th>
            <th>Remarks</th>

        </tr>

        @foreach($studentData as $data)
        <tr>
            <td class="TableHeader" style="background-color: #449d44;" contenteditable="false">{{$data['student_id']}}</td>
            <td style="background-color: #FCFB98;" contenteditable="false">{{$data['name']}}</td>
            
            <td contenteditable="true"> 70</td>
            <td contenteditable="true"> 70</td>

            <td contenteditable="true"> 70</td>
            <td contenteditable="true"> 70</td>

            <td contenteditable="true"> 70</td>
            <td contenteditable="true"> 70</td>

            <td contenteditable="true"> 70</td>
            <td contenteditable="true"> 70</td>

           
            <td></td>
            <td style="background-color: #FCFB98;"contenteditable="false" > 80</td>
            <td  style="background-color: #FCFB98;"contenteditable="false"> 1.5 </td>
            <td  style="background-color: #a9d86e;"contenteditable="true"> Passed</td>
        </tr>
        @endforeach
      
    </table>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="export-btn" class="btn btn-success">Export Data</button>
    <label id="export"></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <button id="export-btn" class="btn btn-success">Final Term</button>
    <label id="export"></label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <button id="export-btn" class="btn btn-warning">Post to Prism</button>
    <label id="export"></label>
                                          
</div>