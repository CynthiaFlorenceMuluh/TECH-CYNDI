<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @media(max-width:10000px){
         body{
             font-family: Arial,sans-serif;
               margin:0;
               background-color:rgba(10,10,40,1);
               height:100%;
               color:beige;
          }
     .header{
    display: flex;
    height:70px;
    background-color: white;
    justify-content: space-between;
    width: 100%;
    padding: 10px 20px;
    position: fixed;
    text-decoration: none;
    margin-bottom:20px ;
    top:0;
    z-index: 1000;
    border:1px solid black;
       }  
   .header .sidebar{
       width:250px;
       height:90vh;
       position: fixed;
       top:0;
       right:-250px;
       background:rgba(10,10,40,1);
       padding-top: 20px;
       transition: 0.3s;
       margin: 0;
   }
   .header .sidebar a{
      display: block;
      color:white;
      padding:10px;
      text-decoration: none;
      transition:0.3s;
   }
   .header .close-btn{
       position:absolute;
       top:10px;
       left:15px;
       font-size: 20px;
       background-color: none;
       border:none;
       color:white;
       cursor:pointer;
   }
   .header .content{
       padding:20px;
   }
   .header .open-btn{
       font-size: 20px;
       cursor:pointer;
       padding:10px 15px;
       background:#333;
       color:white;
       border:none;
       margin:0px;
   }
   img{
    height:80px;
    width:50px;
    border-radius:2px;
  }
   .sidebar a:hover{
       background: #575757;
   }
}
   </syle>
   <body>
    <body>
                 <div class="header">
         <a href=""><img src="logo.png" alt="logo"> </a>
          <div class="sidebar" id="sidebar">
                  <button class="close-btn" onclick="togglesidebar()">x</bu
             <ul class="navbar">
                 <li><a href="My blog.html">HOME</a></li>
                 <li><a href="Blog.html">BLOG</a></li>
                 <li><a href="My blog.html">TUTORIALS</a></li>
                 <li><a href="Project.html">PROJECTS</a></li>
                 <li><a href="Service.html">SERVICES</a></li>
                 <li><a href="AboutMe.html">ABOUT</a></li>
                 <li><a href="Contact.html">CONTACT</a></li>
             </ul>
          </div>
              <div class="content">
                 <button class="open-btn" onclick="togglesidebar()">☰
                </button> 
              </div>    
 </div>



  <script>
      
function togglesidebar(){
    let sidebar=
    document.getElementById('sidebar');
    if(sidebar.style.right==="-250px"){
        sidebar.style.right="0";}
        else{
            sidebar.style.right="-250px";
        }
    }
    </script>
    </body>
    </html>