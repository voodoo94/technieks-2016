<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Pre-techNIEks | Scoreboard</title>
<script src="js/jquery.min.js"></script>
<link href="./style@technieks.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="nie_logo_favicon.png">
<style>
body {
  background-color: #fe9;
  background-size: cover;
  background-attachment: fixed;
}
.background-image
{
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: url(../images/bg.jpg) no-repeat;
    background-size: 100% 125%;
    -webkit-filter:blur(1.5px);
    -moz-filter:blur(1.5px);
    -ms-filter:blur(1.5px);
    -oz-filter:blur(1.5px);
    z-index: -1;
}
</style>

</head>
            
<!--
   <script type="text/javascript">

   function fill_table()
	{
	var par = "action=get_json";
	  $.ajax({
        type: 'POST',
        url: '../data/process.php',
        data: par,
        beforeSend: function () {
           },
        success: function (data) {for(i=0;i<9;i++)
		  {
		   curTot=0;
		  for(j=0;j<16;j++)
		  {
		    ipid=""+j+i;
			scr=data.bid[i].events[j].score;
			curTot=curTot+parseInt(scr);
			$("#"+ipid).html(scr);
		  }
		  $("#"+i+"t").html(curTot);
		  }
        },
        error: function () {
	  }
    });
	return false;
	}
	$(document).ready(function() {
	fill_table();
});
</script>
-->
<!-- Have to manually update the scores as of now. The backend was set-up properly last year and we can just use that itself-->
<body>
    <div class="background-image"> </div>
	<div id="scorecard">
    <!--
            <div class="admin-login">
        <form action="./admin/index.php" method="get">
            <input type="submit" class="pre-tech-scoremanager" value="admin login" />
        </form>
    </div> -->
    	<div id="scoresPanel">
        	<div style="height:80px;">
            <ul id="events">
            	<li class="blank">	</li>
            	<li><span><img src="./images/events_03.png"></span></li>
            	<li><span><img src="./images/events_05.png"></span></li>
            	<li><span><img src="./images/events_07.png"></span></li>
            	<li><span><img src="./images/events_09.png"></span></li>
            	<li><span><img src="./images/events_11.png"></span></li>
            	<li><span><img src="./images/events_13.png"></span></li>
            	<li><span><img src="./images/events_15.png"></span></li>
            	<li><span><img src="./images/events_17.png"></span></li>
            	<li><span><img src="./images/events_19.png"></span></li>
            	<li><span><img src="./images/events_21.png"></span></li>
            	<li><span><img src="./images/events_23.png"></span></li>
            	<li><span><img src="./images/events_25.png"></span></li>
            	<li><span><img src="./images/events_27.png"></span></li>
            	<li><span><img src="./images/events_29.png"></span></li>
                <!--
            	<li><span><img src="./images/events_31.png"></span></li>
            	<li><span><img src="./images/events_33.png"></span></li>
                -->
            	<li class="blank">	</li>
            </ul>
        </div>
        <div id="scores">
            	<ul>
                	<li>
                    	<ul id="deparmentScore">
                    		<li class="strong">CSE</li>
                        	<li id="00">20</li>
                        	<li id="10">10</li>
                        	<li id="20">30</li>
                        	<li id="30">10</li>
                        	<li id="40">00</li>
                        	<li id="50">00</li>
                        	<li id="60">10</li>
                        	<li id="70">10</li>
                        	<li id="80">10</li>
                        	<li id="90">00</li>
                        	<li id="100">30</li>
                        	<li id="110">30</li>
                        	<li id="120">10</li>
                        	<li id="130">00</li>
                            <!--
                        	<li id="140">00</li>
                        	<li id="150">00</li>
                            -->
                        	<li class="total" id="0t">170</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">ISE</li>
                            <li id="01">20</li>
                        	<li id="11">30</li>
                        	<li id="21">40</li>
                        	<li id="31">10</li>
                        	<li id="41">00</li>
                        	<li id="51">00</li>
                        	<li id="61">20</li>
                        	<li id="71">10</li>
                        	<li id="81">10</li>
                        	<li id="91">10</li>
                        	<li id="101">40</li>
                        	<li id="111">20</li>
                        	<li id="121">20</li>
                        	<li id="131">00</li>
                            <!--
                        	<li id="141">00</li>
                        	<li id="151">00</li>
                            -->
                        	<li class="total" id="1t">230</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
						<li class="strong">ECE</li>
                    		<li id="02">40</li>
                        	<li id="12">10</li>
                        	<li id="22">10</li>
                        	<li id="32">30</li>
                        	<li id="42">00</li>
                        	<li id="52">00</li>
                        	<li id="62">10</li>
                        	<li id="72">10</li>
                        	<li id="82">10</li>
                        	<li id="92">10</li>
                        	<li id="102">30</li>
                        	<li id="112">20</li>
                        	<li id="122">30</li>
                        	<li id="132">00</li>
                            <!--
                        	<li id="142">00</li>
                        	<li id="152">00</li>
                            -->
							<li class="total" id="2t">210</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">MECH</li>
                        	<li id="03">20</li>
                        	<li id="13">40</li>
                        	<li id="23">30</li>
                        	<li id="33">20</li>
                        	<li id="43">00</li>
                        	<li id="53">00</li>
                        	<li id="63">30</li>
                        	<li id="73">10</li>
                        	<li id="83">20</li>
                        	<li id="93">20</li>
                        	<li id="103">20</li>
                        	<li id="113">40</li>
                        	<li id="123">40</li>
                        	<li id="133">00</li>
                            <!--
                        	<li id="143">00</li>
                        	<li id="153">00</li>
                            -->
                        	<li class="total" id="3t">290</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">IPE</li>
                        	<li id="04">30</li>
                        	<li id="14">20</li>
                        	<li id="24">20</li>
                        	<li id="34">10</li>
                        	<li id="44">00</li>
                        	<li id="54">00</li>
                        	<li id="64">10</li>
                        	<li id="74">10</li>
                        	<li id="84">10</li>
                        	<li id="94">10</li>
                        	<li id="104">20</li>
                        	<li id="114">40</li>
                        	<li id="124">20</li>
                        	<li id="134">00</li>
                            <!--
                        	<li id="144">00</li>
                        	<li id="154">00</li>
                            -->
                        	<li class="total" id="4t">200</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">CIVIL</li>
                        	<li id="05">20</li>
                        	<li id="15">30</li>
                        	<li id="25">10</li>
                        	<li id="35">10</li>
                        	<li id="45">00</li>
                        	<li id="55">00</li>
                        	<li id="65">10</li>
                        	<li id="75">30</li>
                        	<li id="85">30</li>
                        	<li id="95">10</li>
                        	<li id="105">20</li>
                        	<li id="115">20</li>
                        	<li id="125">30</li>
                        	<li id="135">00</li>
                            <!--
                        	<li id="145">00</li>
                        	<li id="155">00</li>
                            -->
                        	<li class="total" id="5t">220</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">EEE</li>
                        	<li id="06">40</li>
                        	<li id="16">40</li>
                        	<li id="26">40</li>
                        	<li id="36">10</li>
                        	<li id="46">00</li>
                        	<li id="56">00</li>
                        	<li id="66">10</li>
                        	<li id="76">20</li>
                        	<li id="86">10</li>
                        	<li id="96">30</li>
                        	<li id="106">40</li>
                        	<li id="116">20</li>
                        	<li id="126">40</li>
                        	<li id="136">00</li>
                            <!--
                        	<li id="146">00</li>
                        	<li id="156">00</li>
                            -->
                        	<li class="total" id="6t">300</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">MCA</li>
                        	<li id="07">20</li>
                        	<li id="17">00</li>
                        	<li id="27">00</li>
                        	<li id="37">00</li>
                        	<li id="47">00</li>
                        	<li id="57">00</li>
                        	<li id="67">00</li>
                        	<li id="77">10</li>
                        	<li id="87">00</li>
                        	<li id="97">10</li>
                        	<li id="107">20</li>
                        	<li id="117">10</li>
                        	<li id="127">20</li>
                        	<li id="137">00</li>
                            <!--
                        	<li id="147">00</li>
                        	<li id="157">00</li>
                            -->
                        	<li class="total" id="7t">90</li>
                        </ul>
                    </li>

                    <li>
                    	<ul id="deparmentScore">
                    		<li class="strong">MTECH</li>
                        	<li id="08">10</li>
                        	<li id="18">00</li>
                        	<li id="28">10</li>
                        	<li id="38">00</li>
                        	<li id="48">00</li>
                        	<li id="58">00</li>
                        	<li id="68">00</li>
                        	<li id="78">10</li>
                        	<li id="88">00</li>
                        	<li id="98">00</li>
                        	<li id="108">00</li>
                        	<li id="118">00</li>
                        	<li id="128">00</li>
                        	<li id="138">00</li>
                            <!--
                        	<li id="148">00</li>
                        	<li id="158">00</li>
                            -->
                        	<li class="total" id="8t">30</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
</body></html>
