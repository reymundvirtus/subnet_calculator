<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subnet Calculator</title>

    <style>
        body{
            font-family: monospace;
            font-size: 16px;
        }
        .addr{
            width: 30px;
        }
        .result .label{
            display: inline-block;
            width: 200px;
            background: #aaf;
        }
    </style>
</head>
<body>
    <h1>Subnet Calculator</h1>

    IP Address
    <input type="text" class="address" id="octet1"> |
    <input type="text" class="address" id="octet2"> |
    <input type="text" class="address" id="octet3"> |
    <input type="text" class="address" id="octet4"> /
    <input type="text" class="address" id="cidr">
    <button onclick="calculate();">Calculate</button>

    <hr>
    <div class="result">
        <span class="label">IP Address: </span>
        <span class="value" id="resIP"></span>
    </div>
    <div class="result">
        <span class="label">Subnet Mask: </span>
        <span class="value" id="resMask"></span>
    </div>
    <div class="result">
        <span class="label">Net Address: </span>
        <span class="value" id="resNet"></span>
    </div>
    <div class="result">
        <span class="label">Broadcast Address: </span>
        <span class="value" id="resBC"></span>
    </div>
    <div class="result">
        <span class="label">Standard Class: </span>
        <span class="value" id="resClass"></span>
    </div>
    <div class="result">
        <span class="label">Range: </span>
        <span class="value" id="resRange"></span>
    </div>
    <div class="result">
        <span class="label">IP Binary: </span>
        <span class="value" id="resBinIP"></span>
    </div>
    <div class="result">
        <span class="label">Mask Binary: </span>
        <span class="value" id="resBinMask"></span>
    </div>
    <div class="result">
        <span class="label">Net Address Binary: </span>
        <span class="value" id="resBinNet"></span>
    </div>
    <div class="result">
        <span class="label">BC Address Binary: </span>
        <span class="value" id="resBinBC"></span>
    </div>

    <script type="text/javascript">
        function calculate(){
            let octet1 = document.getElementById('octet1').value;
            let octet2 = document.getElementById('octet2').value;
            let octet3 = document.getElementById('octet3').value;
            let octet4 = document.getElementById('octet4').value;
            let cidr=document.getElementById('cidr').value;

            //validate input value
            if ((octet1 >= 0 && octet1 <= 255) && (octet2 >= 0 && octet2 <= 255) && (octet3 >= 0 && octet3 <= 255) && (octet4 >= 0 && octet4 <= 255) && (cidr >= 0 && cidr <= 32))
            {
                //display IP address
                document.getElementById('resIP').innerHTML=octet1 + "." + octet2 + "." + octet3 + "." + octet4;

                //get IP Address binaries
                let ipBin={};
                ipBin[1] = String("00000000" + parseInt(octet1, 10).toString(2)).slice(-8);
                ipBin[2] = String("00000000" + parseInt(octet2, 10).toString(2)).slice(-8);
                ipBin[3] = String("00000000" + parseInt(octet3, 10).toString(2)).slice(-8);
                ipBin[4] = String("00000000" + parseInt(octet4, 10).toString(2)).slice(-8);

                //decide standart class
                let standartClass = "";
                if (octet1 <= 126) {
                    standartClass = "A";
                }else if (octet1 == 127) {
                    standartClass = "loopback IP"
                }else if (octet1 >= 128 && octet1 <= 191) {
                    standartClass = "B";
                }else if (octet1 >= 192 && octet1 <= 223) {
                    standartClass = "C";
                }else if (octet1 >= 224 && octet1 <= 239) {
                    standartClass = "D (Multicast Address)";
                }else if (octet1 >= 240 && octet1 <= 225) {
                    standartClass = "E (Experimental)";
                }else {
                    standartClass = "Out of range";
                }

                //netmask
                let mask = cidr;
                let importantBlock = Math.ceil(mask / 8);
                let importantBlockBinary = ipBin[importantBlock];
                let maskBinaryBlockCount = mask % 8;
                if (maskBinaryBlockCount == 0)importantBlock++;
                let maskBinaryBlock = "";
                let maskBlock = "";
                
                for(let i = 1; i <= 8; i++){
                    if (maskBinaryBlockCount >= i){
                        maskBinaryBlock += "1";
                    }else {
                        maskBinaryBlock += "0";
                    }
                }
                
                //convert binary mask block to decimal
                maskBlock = parseInt(maskBinaryBlock, 2);

                //net & broadcast addr
                let netBlockBinary = "";
                let bcBlockBinary = "";
                for (let i = 1; i <= 8; i++){
                    if (maskBinaryBlock.substr(i - 1, 1) == "1"){
                        netBlockBinary += importantBlockBinary.substr(i - 1, 1);
                        bcBlockBinary += importantBlockBinary.substr(i - 1, 1);
                    }else {
                        netBlockBinary += "0";
                        bcBlockBinary += "1";
                    }
                }

                //put everything together, create a string container letiables
                //let mask = "";
                let maskBinary = "";
                let net = "";
                let bc = "";
                let netBinary = "";
                let bcBinary = "";
                let rangeA = "";
                let rangeB = "";

                //loop to put whole strings block together
                for (let i = 1; i <= 4; i++){
                    if (importantBlock > i) {
                        //blocks before the important block.
                        mask += "255";
                        maskBinary += "11111111";
                        netBinary += ipBin[i];
                        bcBinary += ipBin[i];
                        net += parseInt(ipBin[i], 2);
                        bc += parseInt(ipBin[i], 2);
                        rangeA += parseInt(ipBin[i], 2);
                        rangeB += parseInt(ipBin[i], 2);
                    }else if (importantBlock == i) {
                        //the important block.
                        mask += maskBlock;
                        maskBinary += maskBinaryBlock;
                        netBinary += netBlockBinary;
                        bcBinary += bcBlockBinary;
                        net += parseInt(netBlockBinary, 2);
                        bc += parseInt(bcBlockBinary, 2);
                        rangeA += (parseInt(netBlockBinary, 2) + 1);
                        rangeB += (parseInt(bcBlockBinary, 2) - 1);
                    }else {
                        //block after the important block.
                        mask += 0;
                        maskBinary += "00000000";
                        netBinary += "00000000";
                        bcBinary += "11111111";
                        net += "0";
                        bc += "255";
                        rangeA += 0;
                        rangeB += 255;
                    }

                    //add . separator except the last block
                    if (i < 4){
                        mask += ".";
                        maskBinary += ".";
                        netBinary += ".";
                        bcBinary += ".";
                        net += ".";
                        bc += ".";
                        rangeA += ".";
                        rangeB += ".";
                    }
                }

                //write the results to the page.
                document.getElementById('resMask').innerHTML = mask;
                document.getElementById('resNet').innerHTML = net;
                document.getElementById('resBC').innerHTML = bc;
                document.getElementById('resRange').innerHTML = rangeA + " - " + rangeB;
                document.getElementById('resBinIP').innerHTML = ipBin[1] + "." + ipBin[2] + "." + ipBin[3] + "." + ipBin[4];
                document.getElementById('resBinMask').innerHTML = maskBinary;
                document.getElementById('resBinNet').innerHTML = netBinary;
                document.getElementById('resBinBC').innerHTML = bcBinary;
                document.getElementById('resClass').innerHTML = standartClass;
            }else{
                alert("invalid value");
            }
        }
    </script>
</body>
</html>