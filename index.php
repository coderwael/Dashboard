<!DOCTYPE html>
<html>
<head>
	<title>Side Navbar</title>
	    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{min-height: 100vh; background: #252b32;}
.navigation{
    position: fixed;
    top: 20px;
    left: 20px;
    bottom: 20px;
    width: 70px;
    border-radius: 10px;
    box-sizing: initial;
    border-left: 5px solid #2e343b;
    border-right: 10px solid #4087ee;
    background: #2e343b;
    transition: 0.5s;
    overflow-x:hidden;
}
.navigation.active{width: 300px;}
.navigation ul{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    padding-left: 5px;
    padding-top: 75px;
}
.navigation ul li{
    position: relative;
    display: block;
    width: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
.navigation ul li.active{background: #4087ee;}
.navigation ul li b:nth-child(1){
    position: absolute;
    top: -20px;
    height: 20px;
    width: 100%;
    background:#4087ee;
    display: none;
}
.navigation ul li b:nth-child(1)::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-bottom-right-radius: 20px;
    background:#2e343b;
}
.navigation ul li b:nth-child(2){
    position: absolute;
    bottom: -20px;
    height: 20px;
    width: 100%;
    background:#4087ee;
    display: none;
}
.navigation ul li b:nth-child(2)::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-top-right-radius: 20px;
    background:#2e343b;
}
.navigation ul li.active b:nth-child(1),
.navigation ul li.active b:nth-child(2){
    display: block;
}
.navigation ul li a{
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: #fff;
}
.navigation ul li.active a{color: white;}
.navigation ul li a .icon{
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 70px;
    text-align: center;
}
.navigation ul li a .icon ion-icon{font-size: 1.5em;}
.navigation ul li a .title{
    position: relative;
    display: block;
    padding-left: 10px;
    height: 60px;
    line-height: 60px;
    white-space: normal;

}
.toggle{
    position: fixed;
    top: 40px;
    left: 40px;
    float: left;
}
.m-soft{
    color: white;
    font-size: 25px;
    display: none;
    position: absolute;
    top: 20px;
    left: 17px;
}
.toggle.active{left: 270px;}
.toggle ion-icon{
    position: absolute;
    color: white;
    font-size: 34px;
    display: none;
}
.toggle ion-icon.open,
.toggle.active ion-icon.close{
    display: block;
}
.toggle ion-icon.close,
.toggle.active ion-icon.open{
    display: none;
}



ion-icon {
    cursor: pointer;
}
        </style>
</head>
<body>

<div class="navigation">
	<ul>
		<p class="m-soft">dashboard</p>
		<li class="list active">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<ion-icon name="home-outline"></ion-icon>
				</span>
				<span class="title">Home</span>
			</a>
		</li>

		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<ion-icon name="person-outline"></ion-icon>
				</span>
				<span class="title">Profile</span>
			</a>
		</li>

		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<ion-icon name="settings-outline"></ion-icon>
				</span>
				<span class="title">Services</span>
			</a>
		</li>

		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<ion-icon name="images-outline"></ion-icon>
				</span>
				<span class="title">Portfolio</span>
			</a>
		</li>

		<li class="list">
			<b></b>
			<b></b>
			<a href="#">
				<span class="icon">
					<ion-icon name="mail-outline"></ion-icon>
				</span>
				<span class="title">Contact us</span>
			</a>
		</li>
		

	</ul>
</div>

<div class="toggle">
	<ion-icon name="menu-outline" class="open"></ion-icon>
	<ion-icon name="close-outline" class="close"></ion-icon>
</div>


<script type="text/javascript">
	let menuToggle = document.querySelector('.toggle')
	let Navigation = document.querySelector('.navigation')
	menuToggle.onclick = function(){
		menuToggle.classList.toggle('active')
		Navigation.classList.toggle('active')
	}

	let list = document.querySelectorAll('.list');
	for(let i = 0; i < list.length; i++){
		list[i].onclick = function(){
			let j = 0;
			while (j < list.length){
				list[j++].className = 'list'
			}
			list[i].className = 'list active';
		}
	}
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".open").click(function(){
			$(".m-soft").css('display','block');
			
		});
		$(".close").click(function(){
			$(".m-soft").css('display','none');
		});
	});
</script>
	
}
</body>
</html>
