<?php
session_start();
if(isset($_SESSION['name'])){
    header('location:dashboard.php');
}
else{
    ?>
<html>
    <head>
        <title>
            Home
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
       <style>
            body{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                
                
            }
            p{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
            }

            .Top{
                background-size: contain;
                height:550px;
                width: 100%;
            }
            .Middle{
                background-color: white;
                height: 700px;
                width: 100%;
            }
            .expert{
                background-image:url(b1.jpg);
            }
            .a{
                margin-top: 40px;
                height: 500px;
                padding: 10px 10px;
               
            }
            .h{
                color: azure;
                font-size: 50px;
                font-weight: 100px;
            }
            .ho{
                color: azure;
                font-size: 40px;
                
                margin-top:-20px;
                padding: 10px 10px;
                background-color: rgba(0,0,0,0.2);

            }
            .points{
                color: aliceblue;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 18px;
                margin-bottom: 10px;
            }
            .btn{
                
                font-size: 30px;
                border-radius: 10px;
                background-color:rgba(253, 224, 224);
                height:60px;
                width:300px;
            }
            .btne{
                font-size: 30px;
                margin-top:-20px;
                height:60px;
                width:300px;
                border-radius: 10px;
                background-color:rgba(253, 224, 224);
            }
            .container{
    position:relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 0;
    flex-wrap:wrap;
}
.container .box{
    position:relative;
    width:80%;
    height:450px;
    color:#fff;
    background: #111;
    display:flex;
    justify-content:center;
    align-items: center;
    margin:20px 30px;
    transition: 0.5s;
    
}
.container .box:hover{
    transform:translate(-20px);
}
.container .box::before{
    content:'';
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: linear-gradient(45deg,#ff00f2,#ff0058);
    filter:blur(30px);
}
.container .box:nth-child(2)::before,
.container .box:nth-child(2)::after{
    background: linear-gradient(315deg,#033bf4,#0099ff);
}
.container .box span{
    position:absolute;
    top:6px;
    left:6px;
    right:6px;
    bottom:6px;
    background: rgba(0,0,0,0.6);
    z-index:2;
}
.container .box span::before{
    content:'';
    position:absolute;
    top:-0;
    left:0;
    width:50%;
    height:50%;
    background: rgba(255,255,255,0.1);
    pointer-events: none;
}
.container .box .a{
    position: relative;
    z-index: 10;
    padding: 20px 40px;
}
.container .boxmid{
    position:relative;
    width:80%;
    height:450px;
    color:#fff;
    background: #111;
    display:flex;
    justify-content:center;
    align-items: center;
    margin:20px 30px;
    transition: 0.5s;
    
}
.container .boxmid:hover{
    transform:translate(-20px);
}
.container .boxmid::before{
    content:'';
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: linear-gradient(45deg,#033bf4,#0099ff);
    filter:blur(30px);
}
.container .boxmid:nth-child(2)::before,
.container .boxmid:nth-child(2)::after{
    background: linear-gradient(315deg,#033bf4,#0099ff);
}
.container .boxmid span{
    position:absolute;
    top:6px;
    left:6px;
    right:6px;
    bottom:6px;
    background: rgba(0,0,0,0.6);
    z-index:2;
}
.container .boxmid span::before{
    content:'';
    position:absolute;
    top:-0;
    left:0;
    width:50%;
    height:50%;
    background: rgba(255,255,255,0.1);
    pointer-events: none;
}
.container .boxmid .a{
    position: relative;
    z-index: 10;
    padding: 20px 40px;
}
footer{
    position:relative;
    width:100%;
    height:auto;
    padding:50px 100px;
    background:black;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}
footer .bottom{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    flex-direction:row;
}
footer .bottom .sec{
    margin-right:30px;
}
footer .bottom .sec.aboutus{
    width:40%;
}
footer .bottom  h2{
    position:relative;
    color:#fff;
    font-weight:500;
    margin-bottom:15px;
}
footer .bottom  h2:before{
    content:'';
    position:absolute;
    bottom:-5px;
    left:0;
    width:50px;
    height:2px;
    background:#f00;
}
footer p{
    color:#999;
}
.quickLinks{
    position:relative;
    width:25%;
}
.quicklinks ul li {
    list-style: none;
}
.quicklinks ul li a{
    color:#999;
    text-decoration:none;
    margin-bottom:10px;
    display: inline-block;
}
.quicklinks ul li a:hover{
    color:#fff;
}
.contact{
    width:calc(35% - 60px);
    margin-right:0 !important;
}
.contact .info{
    position: relative;
}
.contact .info li{
    display:flex;
    margin-bottom:16px;
}
.contact .info li span:nth-child(1)
{
    color:#fff;
    font-size:20px;
    margin-right:10px;
}
.contact .info li span{
    color:#999;
}
.contact .info li a{
    color:#999;
}
.copyrightText{
    width:100%;
    background:#181818;
    padding:8px 100px;
    text-align: center;
    color:#999;
}
@media (max-width:991px)
{
    footer{
        padding:40px;
    }
    footer .bottom{
        flex-direction:column;
    }
    footer .bottom .sec{
        margin-right:0;
        margin-bottom:40px;
    }
    footer .bottom .sec.aboutus{
        width:100%;
    }
}
            /*
            .btn:hover{
                font-size: 35px;
                transform: rotate(-30 deg) skewX(25 deg)translate(0,0);
                transition: 0.5s;
                box-shadow: -5px 5px 5px white;
            }*/
            .square{
    position: relative;
    width: 570px;
    height: 570px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:140px;
    margin-bottom:10px;
}
.square span:nth-child(1)
{
    position: absolute;
    top:0;
    left: 0;
    width:100%;
    height: 100%;
    border:2px solid rgb(228, 89, 209);
    border-radius: 48% 72% 77%/81% 94% 56% 59%;
    transition: 0.5s;
    animation:animate 6s linear infinite;
}
.square:hover span:nth-child(1)
{
    border:none;
    background: #5bc4e5;
}
.square span:nth-child(2)
{
    position: absolute;
    top:0;
    left: 0;
    width:100%;
    height: 100%;
    border:2px solid rgb(233, 94, 180);
    border-radius: 48% 72% 77%/81% 94% 56% 59%;
    transition: 0.5s;
    animation:animate 4s linear infinite;
}
.square:hover span:nth-child(2)
{
    border:none;
    background: #5bc4e5;
}
.square span:nth-child(3)
{
    position: absolute;
    top:0;
    left: 0;
    width:100%;
    height: 100%;
    border:2px solid rgb(233, 94, 180);
    border-radius: 48% 72% 77%/81% 94% 56% 59%;
    transition: 0.5s;
    animation:animate 10s linear infinite;
}
.square:hover span:nth-child(3)
{
    border:none;
    background: #5bc4e5;
}
@keyframes animate
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}
@keyframes animate2
{
    0%
    {
        transform: rotate(360deg);
    }
    100%
    {
        transform: rotate(0deg);
    }
}
.content{
    position: relative;
    padding:40px 60px;
    color:black;
    text-align:center;
    transition:0.05s;
    z-index:1000;
    
    
}
.header{
                min-height:100vh;
                width:100%;
            }
            .video-background{
                position:absolute;
                right:0;
                bottom:0;
                min-width: 100%;
                height:100%;
                width:auto;
                height:auto;
                z-index:-1;
            }
            @media (min-aspect-ratio:16/9)
            {
                .video-background{
                    width:100%;
                    height:auto;
                }

            }
            @media (max-aspect-ratio:16/9)
            {
                .video-background{
                    width:auto;
                    height:100%;
                }

            }
            img{
                margin-top:40px;
                width:200px;
                height:200px;
            }
            .bub{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size:18px;
            }
            .container1{
                position:relative;
                width:1400px;
                display:flex;
                justify-content:center;
                align-items:center;
                flex-wrap:wrap;
                padding:30px;
                margin-left: 80px;
            }
            .container1 .carde
            {
                position:relative;
                max-width: 300px;
                height:300px;
                background:#fff;
                margin:30px 10px;
                padding:20px 15px;
                display:flex;
                flex-direction:column;
                box-shadow:0 5px 202px rgba(0,0,0,0.5);
                transition:0.3s ease-in-out;

            }
            .container1 .carde:hover{
                height:420px;
            }

            .container1 .carde .imgBx
            {
                position:relative;
                width:260px;
                height:300px;
                top:-20px;
                left:20px;
                box-shadow:0 5px 20px rgba(0,0,0,0.2);
            }
            .container1 .carde .imgBx img{
                max-width: 100%;
                border-radius: 4px;
            }
            .container1 .carde .contente
            {
                position:relative;
                margin-top:-140px;
                padding:10px 15px;
                text-align:center;
                color:#111;
                visibility: hidden;
                opacity:0;
            }
            .container1 .carde:hover .contente
            {
                visibility:visible;
                opacity:1;
                margin-top:-40px;
                transition-delay:0.3s;

            }
            #tp{
    border-style:ridge;
    

}

        </style>

    </head>
    <body>
        <div style="background-color: rgba(253, 224, 224); height:50;" id="tp">
            <a href="adminlogin.html"><i class="fa fa-bars fa-2x" aria-hidden="true" style="margin-left:0px; margin-top:10px;"></i></a>
            <a href="quiz.html"><i class="fa fa-gamepad fa-2x" aria-hidden="true" style="margin-left:1270px; margin-top:-30px;">  QUIZ</i></a>
          
            </div>
        <div class="Top">
            <section class="header">
                <video autoplay loop class="video-background" muted plays-inline>
                <source src="v4.mp4" type="video/mp4">
                </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> 
                        <div class="box">
                            <span></span>
                            <div class="a">
                    
                                <h1 class="h">Join us as an user!</h1><br>
                                <p class="points"><i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can exlpore technology news, expert articles, news, videos, and podcasts.</p><br>
                               <p class="points"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can connect with our experts and follow their posts.</p><br>
                               <p class="points"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can have fun interaction through games and quizes.</p><br>
                               <center> <a href="userlogreg.php"><button class="btn"> Get Started!</button></a></center>
                            </a>
                            </div>
                            
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="boxmid">
                            <span></span>
                                
                                    <div class="a">
                                        <h1 class="h">Join us as an expert!</h1><br>
                                        <p class="points"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can use TechBustle to explore and share your technological interests.</p><br>
                                        <p class="points"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can share your articles, podcasts, and videos.</p><br>
                                        <p class="points"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>  You can explore technology news, podcasts, videos, and articles of other knowledgable experts</p><br>
                                        <center><a href="expertlogreg.php"><button class="btne"> Get Started!</button></a></center>
                                     
                                    </div>
                                    
                                </div>
                            </div>
            
                        </div> 
                    </div>
                
                
            
           
</div>
</section>
        
        <div class="Middle">
         <center> <img src="logocrop.png" style="width:500px; height:300px; margin-top:-90px;" ></center>
          <div class = "container-fluid">
            <div class = "row">
                <div class= "col-md-5">
                    <!--<video width="900" height="400" controls>-->
                        <video autoplay muted controls style="width:700px; height:400px;">
                    <source src="front.mp4" type="video/mp4">
                </video>
                    </div>
                    <div class= "col-md-7">
                        <div class="square">
                            <span></span>
                            <span></span>
                            <span></span>
                
                        <div class="content">
                            <p class="bub">TechBustle opens the door to the world of technology, scrolling the knowledge and gaining the changes that unlocks new creativity in you.
                        <br>
                        TechBustle provides a platform for technology lovers to view tech specific news, expert's articles, videos, podcasts, etc that will help in changing your creativity into an oppurtunity. It also provides fun interactions with quizzez and games. 
                        TechBustle covers technology related news from India and around the world.<br>We offer a 
                            tech newsfeed that brings into sharp focus the trending and latest nrews that are changing
                            the world.<br>It is started with the vision to provide a platform for technophiles with lots
                            of interactive features like social-media.</p>
                        </div>
                    </div>
                    </div>
                </div>
                

        </div>
        <div class="expert">
            <h1 class="ho">CONNECT TO ACCLAIMED EXPERTS THROUGH TECHBUSTLE !!</h1>
          <div class="container1">
            <div class="carde">
               <div class="imgBx">
                   <img src="expert1.jpg">
               </div>
             <div class="contente">
                 <h2>VIVEKANAND PRASAD</h2>
               <p>Founder of Techprolabz-school of Robotics</p>
             </div>
           </div>
           <div class="carde">
            <div class="imgBx">
                <img src="expert2.jpg">
            </div>
          <div class="contente">
              <h2>MANISHA PRASAD</h2>
            <p>Head of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        <div class="carde">
            <div class="imgBx">
                <img src="expert3.jpg">
            </div>
          <div class="contente">
              <h2>JAYNENDRA SHARMA</h2>
            <p>Co-founder of Techprolabz-school of Robotics</p>
          </div>
        </div>
       
        <div class="carde">
            <div class="imgBx">
                <img src="expert5.jpg">
            </div>
          <div class="contente">
              <h2>Amrita Prakash</h2>
            <p>Assistant Professor of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        <div class="carde">
            <div class="imgBx">
                <img src="expert6.jpg">
            </div>
          <div class="contente">
              <h2>Anshu</h2>
            <p>Assistant Professor of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        <div class="carde">
            <div class="imgBx">
                <img src="expert7.jpg">
            </div>
          <div class="contente">
              <h2>Renu Kumari </h2>
            <p>Assistant Professor of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        <div class="carde">
            <div class="imgBx">
                <img src="expert8.jpg">
            </div>
          <div class="contente">
              <h2>Nimisha Manan</h2>
            <p>Assistant Professor of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        <div class="carde">
            <div class="imgBx">
                <img src="expert9.jpg">
            </div>
          <div class="contente">
              <h2> Deepa Sonal</h2>
            <p>Assistant Professor of Department,Computer Science,Patna Women's College</p>
          </div>
        </div>
        
    </div>
        <footer>
        <div class="bottom">
            <div class="sec aboutus">
               <h2>Our Team..</h2> 
               <p> Anshika</p>
               <p> Bhavya Prakash
               </p>
<p> Nancy Mishra</p>
<p> Priyadarshani Lalli</p>            
                </div>
        
        <div class="sec quickLinks">
            
            <img src="map.png">
            
        </div>
           <div class="sec contact">
               <h2>Contact Info</h2>
               <ul class="info">
                   <li>
                       <span></span>
                       <span>Patna Women's College<br>
                    Patna,Bailey Road,Kidwaipuri<br>
                Patna-800001 Contact no-0612 253 1186</span>
                   </li>
               </ul>
           </div>
        </div>
        </footer>
        <div class="copyrightText">
            <p>Copyright @ 2021 TechBustle. All Rights Reserved.</p>
        </div>
        </body>
</html>
<?php } ?>