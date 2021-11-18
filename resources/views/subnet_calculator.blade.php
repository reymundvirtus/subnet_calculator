<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('css/subnet_css.css') }}" rel="stylesheet" type="text/css" >
    <title>Subnet Calculator</title>
</head>
<body oncontextmenu="return false">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Subnet Calculator</a>
        </div>
    </nav>

    <br><br>
    <div class="container">
        <center><h1>Subnet Calculator</h1></center>
            
        <form id="calculate" method="post">
            <div class="row">
                <div class="col row g-3 oct">
                <h5 for="octet1"> Enter your IP Address:</h5>
                    <div class="col">
                        <input type="text" class="form-control oct" id="octet1" placeholder="1-255" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control oct" id="octet2" placeholder="1-255" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control oct" id="octet3" placeholder="1-255" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control oct" id="octet4" placeholder="1-255" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control oct" id="no_of_subnet" placeholder="no of subnet" required>
                    </div>
                    <center>
                    <div class="select-subnet">
                        <select required id="subnet_mask" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="" disabled selected>Subnet Mask</option>
                            <option value="24">/24</option>
                            <option value="25">/25</option>
                            <option value="26">/26</option>
                            <option value="27">/27</option>
                            <option value="28">/28</option>
                            <option value="29">/29</option>
                            <option value="30">/30</option>
                            <option value="31">/31</option>
                            <option value="32">/32</option>
                        </select>
                    </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-warning" type="button" aria-current="page" data-bs-toggle="modal" data-bs-target="#viewTable">Table</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-success" type="submit" onclick="calculate();">Calculate</button>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-danger">Clear</a>
                            </div>
                        </div></center>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div id="tab" style="overflow-x:auto">
                    <table class="table table-dark table-striped table-hover">
                        <tr>
                            <th>Network ID</th>
                            <th>Subnet Mask</th>
                            <th>Host ID Range</th>
                            <th>No. of Usable Host</th>
                            <th>Broadcast ID</th>
                        </tr>
                        <tr class="table-dark">
                            <td>
                                <span class="value" id="netID"></span>
                            </td>
                            <td>
                                <span class="value" id="subMask"></span>
                            </td>
                            <td>
                                <span class="value" id="hostID"></span>
                            </td>
                            <td>
                                <span class="value" id="usableHost"></span>
                            </td>
                            <td>
                                <span class="value" id="broadID"></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <p>
            <input type="button" class="btn btn-primary" value="Create PDF" 
                id="btPrint" onclick="createPDF()" />
        </p>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="viewTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/img/table.jpg" alt="table">
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal fade" id="success" tabindex="-1" aria-labelledby="success" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content1">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Success!</h3>
                </div>
            </div>
        </div>
    </div>

    <center><br>
    <div>
            <p class="about">Copyright 2021<br>
            <a href="https://reymundvirtus.pythonanywhere.com/" target="_blank" class="about">About the Developer</a></p>
    </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/subnet_js.js"></script>
</body>

<script>
    /* Disable inspect element
    document.onkeydown = function(e) {
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }*/

    // To setup our csrf_token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // to insert our ipaddress in database
    $("#calculate").submit('click', function(){

        let octet1 = $('#octet1').val();
        let octet2 = $('#octet2').val();
        let octet3 = $('#octet3').val();
        let octet4 = $('#octet4').val();
        let no_of_subnet = $('#no_of_subnet').val();
        let subnet_mask = $('#subnet_mask').val();

            $.ajax({
                type: 'POST',
                datatype: 'JSON',
                data: {octet1:octet1, octet2:octet2, octet3:octet3, octet4:octet4, no_of_subnet:no_of_subnet, subnet_mask:subnet_mask},
                url: "insert",
                success: function(data) {
                    $("#success").modal("show");
                },
            });

        return false;
    });

</script>
</html>