
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DjaLo Stats - Search</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.jpg">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/search.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="index.html">DjaLo<em>Stats</em></a>
        </div>
        <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                
            </div>
        </div>
    </footer>





    
        <h1 align="center"> SEARCH </h1>

        <div align="center" >
                <table>
                <th class="ecriture">
                Searching parameters
                </th>   
                </table>

                <br/>
                <br/>
                    <form  method="post" action="results1.php"> 
                        
                        <div id="border">
                        <br/>    
                            <span class="ecrit">Name :</span> <input class="design" id ="name" type="text" name="name" placeholder="name"/><br/>
                            <br/>
                            <br/>

                            <span class="ecrit">Country </span> <input class="design" id="country" type="text" name="country" placeholder="country" /><br/>
                            <br/>
                            <br/>

                            <span class="ecrit">Club </span> <input class="design" id="club" type="text" name="club" placeholder="club" /><br/>
                            <br/>
                            <br/>
                            
                            <span class="ecrit">Age :</span> <select id="age1" type="number" name="age1" placeholder=" "> 
                                    <option value="  ">  </option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                            </select>   <select id="age2" type="number" name="age2" placeholder=" "> 
                                <option value="  ">  </option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                            </select><br/>
                            <br/>
                            <br/>
                                                       
                            <span class="ecrit">Position :</span> <select id="poste" name="poste" placeholder=" ">
                                <option value="  ">  </option><option value="  ">  </option>
                                <optgroup label="Attack">
                                    <option value="RW">RW</option>
                                    <option value="LW">LW</option>
                                    <option value="ST">ST</option>
                                    <option value="LF">LF</option>
                                    <option value="CF">CF</option>
                                    <option value="RF">RF</option>    
                                </optgroup>
                                <optgroup label="Midfield">
                                    <option value="CAM">CAM</option>
                                    <option value="LM">LM</option>
                                    <option value="CM">CM</option>
                                    <option value="RM">RM</option>
                                    <option value="CDM">CDM</option>
                                       
                                </optgroup>
                                <optgroup label="Defence">
                                    <option value="LWB">LWB</option>
                                    <option value="RWB">RWB</option>
                                    <option value="LB">LB</option>
                                    <option value="RB">RB</option>
                                    <option value="CB">CB</option>
                                        
                                </optgroup>
                                <optgroup label="Goalkeeping">
                                    <option value="GK">GK</option>    
                                </optgroup>

                            </select>
                                
                            <br/>
                            <br/>
                            <br/>
                            
                            <span class="ecrit">Overall Rating :</span> <select id="overall1" type="number" name="overall1" placeholder=" "> 
                                <option value="  ">  </option>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    <option value="60">60</option>
                                    <option value="65">65</option>
                                    <option value="70">70</option>
                                    <option value="75">75</option>
                                    <option value="80">80</option>
                                    <option value="85">85</option>
                                    <option value="90">90</option>
                                    <option value="95">95</option>
                                    <option value="99">99</option>
                                    
                            </select>   <select id="overall2" type="number" name="overall2" placeholder=" ">
                                <option value="  ">  </option> 
                                <option value="00">00</option>
                                <option value="05">05</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                                <option value="55">55</option>
                                <option value="60">60</option>
                                <option value="65">65</option>
                                <option value="70">70</option>
                                <option value="75">75</option>
                                <option value="80">80</option>
                                <option value="85">85</option>
                                <option value="90">90</option>
                                <option value="95">95</option>
                                <option value="99">99</option>
                                
                        </select><br/>
                            <br/>
                            <br/>
                            
                            <span class="ecrit">Potential :</span> <select id="potential1" type="number" name="potential1" placeholder=" ">
                                <option value="  ">  </option> 
                                <option value="00">00</option>
                                <option value="05">05</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="45">45</option>
                                <option value="50">50</option>
                                <option value="55">55</option>
                                <option value="60">60</option>
                                <option value="65">65</option>
                                <option value="70">70</option>
                                <option value="75">75</option>
                                <option value="80">80</option>
                                <option value="85">85</option>
                                <option value="90">90</option>
                                <option value="95">95</option>
                                <option value="99">99</option>
                                
                        </select>   <select id="potential2" type="number" name="potential2" placeholder=" "> 
                            <option value="  ">  </option>
                            <option value="00">00</option>
                            <option value="05">05</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                            <option value="55">55</option>
                            <option value="60">60</option>
                            <option value="65">65</option>
                            <option value="70">70</option>
                            <option value="75">75</option>
                            <option value="80">80</option>
                            <option value="85">85</option>
                            <option value="90">90</option>
                            <option value="95">95</option>
                            <option value="99">99</option>
                            
                    </select><br/>
                            <br/>
                            <br/>
                            
                                <input class="next" id="submit" type="submit" value="Next" />
                        </div>
                    </form>
            </div>






    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.html">Home</a>
                  </li>
                  <li>
                      <a href="masonry.html">Search</a>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>
