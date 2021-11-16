<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/subnet_css.css">
    <title>Subnet Calculator</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Subnet Calculator</a>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="back">
                <center><h1>Subnet Calculator</h1></center>
                <div class="col-lg-12 row g-3 oct">
                    <h5 for="octet1"> Enter your IP Address:</h5>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet1" placeholder="192">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet2" placeholder="168">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet3" placeholder="4">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="octet4" placeholder="2">
                    </div>
                    <div class="col-auto">
                        <input type="text" required class="form-control oct" id="no_of_subnet" placeholder="no of subnet">
                    </div>
                    <center>
                    <div class="select-subnet">
                        <select id="subnet_mask" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Subnet Mask</option>
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
                    </div></center>
                </div>
                <center>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-warning" type="button" aria-current="page" data-bs-toggle="modal" data-bs-target="#viewTable">View Table</button>
                        <button class="btn btn-success" type="button" onclick="calculate();">Calculate</button>
                        <a href="" class="btn btn-danger">Clear</a>
                    </div>
                </center>
            </div>
        </div>
            
            <table>
                <tr>
                    <th>Network ID</th>
                    <th>Subnet Mask</th>
                    <th>Host ID Range</th>
                    <th>No. of Usable Host</th>
                    <th>Broadcast ID</th>
                </tr>
                <tr>
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
    
    <!-- Modal -->
    <div class="modal fade" id="viewTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ url('img/table.jpg') }}" alt="table">
                </div>
            </div>
        </div>
    </div>

    <div class="mov">
        <center>
            <p class="about">Copyright 2021<br>
            <a href="https://reymundvirtus.pythonanywhere.com/" class="about">About the Developer</a></p>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/subnet_js.js"></script>
</body>
</html>